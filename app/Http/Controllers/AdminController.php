<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\SolusiMail;
use App\Models\Registration;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index(){
        return view('admin.page.dashboard',[
            'title' => 'DKBM UMN - Dashboard Admin',
            'items' => Aspiration::All()->where('Status', "Pending")
        ]);
    }

    public function finished(){
        return view('admin.page.dashboardFinished',[
            'title' => 'DKBM UMN - Dashboard Admin',
            'items' => Aspiration::All()->where('Status',"Finished")
        ]);
    }

    public function onProgress(){
        return view('admin.page.dashboardOnProgress',[
            'title' => 'DKBM UMN - Dashboard Admin',
            'items' => Aspiration::All()->where('Status',"On Progress")
        ]);
    }

    public function dataUser(){
        return view('admin.page.dataUser',[
            'title' => 'DKBM UMN - Dashboard Admin',
            'items' => Registration::All()
        ]);
    }

    public function editUser(Request $request){
        $ValidRequest = $request->validate([
            'Nama' => 'required',
            'Email' => 'required',
            'NIM' => 'required',
            'Jurusan' => 'required',
            'nomorWA' => 'required',
            'ID_Line' => 'required',
        ]);

        $data = Registration::where('id', $request['id'])->first();
        $data->Nama = $ValidRequest['Nama'];
        $data->Email = $ValidRequest['Email'];
        $data->NIM = $ValidRequest['NIM'];
        $data->Jurusan = $ValidRequest['Jurusan'];
        $data->nomorWA = $ValidRequest['nomorWA'];
        $data->ID_Line = $ValidRequest['ID_Line'];
        if($request['password']){
            $data->password = Hash::make($request['password']);
        }
        $data->save();

        Alert::success('Data user berhasil diubah!');

        return redirect(route('dataUser'));
    }

    public function deleteUser(Registration $registration){
        $user = Registration::where('id', $registration->id);
        $aspirasi = Aspiration::All()->where('User_id', $user->first()->id);
        foreach($aspirasi as $asp){
            $asp->delete();
        }
        $delete = $user->delete();
        Alert::success('Data user berhasil dihapus!');
        return redirect(route('dataUser'));
    }

    function logout(){
        Auth::guard('admin')->logout();
  
        request()->session()->invalidate();
  
        request()->session()->regenerateToken();
  
        return redirect(route('home'));
    }

    public function update(Request $request){
        $ValidRequest = $request->validate([
            'Solusi' => 'Required',
            'Status' => 'required'
        ]);
        $data = Aspiration::where('Resi', $request['Resi'])->first();
        $data->Status = $ValidRequest['Status'];
        $data->Solusi = $ValidRequest['Solusi'];
        $data->save();

        // Email
        $this->sendEmail($ValidRequest, $request);

        Alert::success('Solusi dan Status berhasil diubah', 'Mahasiswa dengan resi tersebut akan menerima email balasan');

        return redirect(route('admin'));
    }

    public function updateProgress(Request $request){
        $ValidRequest = $request->validate([
            'Solusi' => 'Required',
            'Status' => 'required'
        ]);
        $data = Aspiration::where('Resi', $request['Resi'])->first();
        $data->Status = $ValidRequest['Status'];
        $data->Solusi = $ValidRequest['Solusi'];
        $data->save();

        // Email
        $this->sendEmail($ValidRequest, $request);

        Alert::success('Solusi dan Status berhasil diubah', 'Mahasiswa dengan resi tersebut akan menerima email balasan');

        return redirect(route('adminOnProgress'));
    }
    
    //SEND EMAIL
    public function sendEmail($data, $user)
    {
        $details = [
            'title' => 'DKBM UMN : Aspiration Solution',
            'name' => $user['userNama'],
            'aspirasi' => $user["Isi"],
            'solusi' => $data["Solusi"]
        ];
        Mail::to($user['userEmail'])->send(new SolusiMail($details));
    }
}
