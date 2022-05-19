<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Registration;

class AspirationController extends Controller {

    function aspirationForm() {
        $resi = Aspiration::constructRandomId(Auth::user());

        return view('cms.page.aspirationForm',[
            'title' => 'DKBM UMN - Aspiration Form',
            'Resi' => $resi,
            'language' => 'English'
        ]);
    }

    function aspirationFormid() {
        $resi = Aspiration::constructRandomId(Auth::user());

        return view('cms.page.aspirationForm-id',[
            'title' => 'DKBM UMN - Form Aspirasi',
            'Resi' => $resi,
            'language' => 'Indonesia'
        ]);
    }

    function aspirationVerification(request $request){
        $ValidRequest = $request->validate([
            'Resi' => 'required',
            'Kategori' => 'required',
            'Isi' => 'required'
        ]);

        $ValidRequest['Status'] = "Pending";
        
        Aspiration::create($ValidRequest);

        return redirect(route('home'));
    }

    function verifikasiAspirasi(request $request){
        $ValidRequest = $request->validate([
            'Resi' => 'required',
            'Kategori' => 'required',
            'Isi' => 'required'
        ]);

        $ValidRequest['Status'] = "Pending";

        Aspiration::create($ValidRequest);

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
}
