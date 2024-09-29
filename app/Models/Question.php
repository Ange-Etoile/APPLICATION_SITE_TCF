<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_sujet',
        'audio',
        'propositions',
        'nombre_point',
    ];
    public function sujet(){
        return $this->belongsTo(Sujet::class,'id_sujet');
    }
}
