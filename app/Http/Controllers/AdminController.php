<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return redirect(route('adminOnProgress'));
    }
}
