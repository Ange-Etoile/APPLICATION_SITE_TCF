<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sujet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_sujet',
        'titre',
        'description',
    ];

    public function questions(){
        return $this->hasMany(Question::class,'id_sujet');
    }

}
