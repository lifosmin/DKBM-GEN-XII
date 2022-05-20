<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Registration;

class Aspiration extends Model
{
    protected $guarded = [
        'id', 'timestamps'
    ];

    public function user_send(){
        return $this->belongsTo(Registration::class, 'User_id');
    }
}
