<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AspirationController extends Controller
{
    function aspirationForm(){
        $user = Auth::user();
        $nim = substr($user->NIM, 6);
        $randomNumber = rand(0,100);
        switch($user->Jurusan){
            case "Informatika":
                $Jurusan = "IF";
                break;
            case "Sistem Informasi":
                $Jurusan = "IS";
                break;
            case "Teknik Komputer":
                $Jurusan = "TK";
                break;
            case "Teknik Elektro":
                $Jurusan = "TE";
                break;
            case "Teknik Fisika":
                $Jurusan = "TF";
                break;
            case "Strategic Communication":
                $Jurusan = "SC";
                break;
            case "Digital Jurnalistics":
                $Jurusan = "JR";
                break;
            case "Akuntansi":
                $Jurusan = "EA";
                break;
            case "Management":
                $Jurusan = "EM";
                break;
            case "DKV":
                $Jurusan = "DKV";
                break;
            case "Film & Animasi":
                $Jurusan = "FA";
                break;
            case "Arsitek":
                $Jurusan = "AR";
                break;
            case "Perhotelan":
                $Jurusan = "HU";
                break;
        };
        return view('cms.page.aspirationForm',[
            'title' => 'DKBM UMN - Aspiration Form',
            'Resi' => $Jurusan.$nim.$randomNumber,
            'language' => 'English'
        ]);
    }

    function aspirationFormid(){
        $user = Auth::user();
        $nim = substr($user->NIM, 6);
        $randomNumber = rand(0,100);
        switch($user->Jurusan){
            case "Informatika":
                $Jurusan = "IF";
                break;
            case "Sistem Informasi":
                $Jurusan = "IS";
                break;
            case "Teknik Komputer":
                $Jurusan = "TK";
                break;
            case "Teknik Elektro":
                $Jurusan = "TE";
                break;
            case "Teknik Fisika":
                $Jurusan = "TF";
                break;
            case "Strategic Communication":
                $Jurusan = "SC";
                break;
            case "Digital Jurnalistics":
                $Jurusan = "JR";
                break;
            case "Akuntansi":
                $Jurusan = "EA";
                break;
            case "Management":
                $Jurusan = "EM";
                break;
            case "DKV":
                $Jurusan = "DKV";
                break;
            case "Film & Animasi":
                $Jurusan = "FA";
                break;
            case "Arsitek":
                $Jurusan = "AR";
                break;
            case "Perhotelan":
                $Jurusan = "HU";
                break;
        };
        return view('cms.page.aspirationForm-id',[
            'title' => 'DKBM UMN - Form Aspirasi',
            'Resi' => $Jurusan.$nim.$randomNumber,
            'language' => 'Indonesia'
        ]);
    }

    function aspirationVerification(request $request){
        // return dd($request);
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
        // return dd($request);
        $ValidRequest = $request->validate([
            'Resi' => 'required',
            'Kategori' => 'required',
            'Isi' => 'required'
        ]);
        $ValidRequest['Status'] = "Pending";

        Aspiration::create($ValidRequest);

        return redirect(route('home-id'));
    }
    
    public function cekResi(){
        return view('cms.page.cekResi', [
            'title' => "DKBM UMN - Cek Resi",
            'language' => "Indonesia",
            'datas' => Aspiration::All()
        ]);
    }
}
