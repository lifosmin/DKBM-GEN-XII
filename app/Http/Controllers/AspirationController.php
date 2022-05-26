<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Registration;
use App\Mail\ResiMail;
use Illuminate\Support\Facades\Mail;

class AspirationController extends Controller {

    function aspirationForm() {
        $user = Auth::user();
        $resi = Aspiration::constructRandomId(Auth::user());

        return view('cms.page.aspirationForm',[
            'title' => 'DKBM UMN - Aspiration Form',
            'User_id' => $user->id,
            'Resi' => $resi,
            'language' => 'English'
        ]);
    }

    function aspirationFormid() {
        $user = Auth::user();
        $resi = Aspiration::constructRandomId(Auth::user());

        return view('cms.page.aspirationForm-id',[
            'title' => 'DKBM UMN - Form Aspirasi',
            'User_id' => $user->id,
            'Resi' => $resi,
            'language' => 'Indonesia'
        ]);
    }

    function aspirationVerification(request $request){
        $ValidRequest = $request->validate([
            'Resi' => 'required',
            'User_id' => 'required',
            'Kategori' => 'required',
            'Isi' => 'required'
        ]);

        $ValidRequest['Status'] = "Pending";
        
        Aspiration::create($ValidRequest);

        $user = Aspiration::where('Resi', $ValidRequest['Resi'])->first();

        $dataUser['nama'] = $user->user_send->Nama;
        $dataUser['Email'] = $user->user_send->Email;

        $this->sendEmail($ValidRequest, $dataUser);

        Alert::success('Your aspiration has been successfully submitted!','You can check your resi ID in your email student');

        return redirect(route('home'));
    }

    function verifikasiAspirasi(request $request){
        $ValidRequest = $request->validate([
            'Resi' => 'required',
            'User_id' => 'required',
            'Kategori' => 'required',
            'Isi' => 'required'
        ]);

        $ValidRequest['Status'] = "Pending";

        Aspiration::create($ValidRequest);

        $user = Aspiration::where('Resi', $ValidRequest['Resi'])->first();

        $dataUser['nama'] = $user->user_send->Nama;
        $dataUser['Email'] = $user->user_send->Email;

        $this->sendEmail($ValidRequest, $dataUser);

        Alert::success('Aspirasi berhasil ditampung!','Cek email mahasiswa untuk mendapatkan resi');

        return redirect(route('home-id'));
    }
    
    public function resi(){
      $user = Auth::user();
      $aspiration = null;

      if($user != null) $aspiration = Registration::find($user->id)->getAspirations();

      return view('cms.page.resi', [
          'title' => "DKBM UMN - Cek Resi",
          'language' => "Indonesia",
          'user' => $user,
          'aspirations' => $aspiration
      ]);
    }

    public function cekResi(Request $request){
      $aspiration = Aspiration::firstWhere('Resi', $request->Resi);

      return view('cms.page.cekResi', [
          'title' => "DKBM UMN - Cek Resi",
          'language' => "Indonesia",
          'aspiration' => $aspiration
      ]);
    }

    //SEND EMAIL
    public function sendEmail($data, $user)
    {
        $details = [
            'title' => 'New Aspiration Added with ID : '.$data["Resi"],
            'name' => $user['nama'],
            'isi' => $data["Isi"],
            'resi' => $data["Resi"]
        ];
        Mail::to($user['Email'])->send(new ResiMail($details));
    }
}
