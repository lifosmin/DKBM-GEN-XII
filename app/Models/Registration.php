<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Aspiration;

class Registration extends Authenticatable
{
    protected $guarded = [
        'id', 'timestamps'
    ];

    public function getAspirations() {
      $aspirations = Aspiration::all();
      $contains = $this->getJurusan().(int) $this->NIM;
      $userAspiration = [];

      foreach($aspirations as $aspiration) {
        if(str_contains($aspiration, $contains)) {
          $userAspiration[] = $aspiration;
        }
      }

      return $userAspiration;
    }

    public function getJurusan() {
      switch($this->Jurusan){
            case "Informatika":
                return "IF";
            case "Sistem Informasi":
                return "IS";
            case "Teknik Komputer":
                return "TK";
            case "Teknik Elektro":
                return "TE";
            case "Teknik Fisika":
                return "TF";
            case "Komunikasi Strategis":
                return "SC";
            case "Jurnalistik":
                return "JR";
            case "Akuntansi":
                return "EA";
            case "Manajemen":
                return "EM";
            case "Desain Komunikasi Visual":
                return "DKV";
            case "Film & Animasi":
                return "FA";
            case "Arsitektur":
                return "AR";
            case "Perhotelan":
                return "HU";
        };
    }
}
