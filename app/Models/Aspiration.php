<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Registration;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Aspiration extends Model
{
    protected $guarded = [
        'id', 'timestamps'
    ];

    public static function constructRandomId($user) {
      $aspirations = Aspiration::all();
      $resi = "";

      //error handling Resi must be unique.
      while(true) {
        $resi = Registration::find($user->id)->getJurusan().substr($user->NIM, 6).strtoupper(substr((String) Str::uuid(), -4));
        foreach($aspirations as $aspiration) {
          if($aspiration->Resi == $resi) {
            continue;
          }
        }
        
        break;
      }

      return $resi;
    }
}
