<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_question',
        'id_sujet',
        'audio',
        'proposition1',
        'proposition2',
        'proposition3',
        'proposition4',
        'nombre_point',
    ];
    public function sujet(){
        return $this->belongsTo(Sujet::class,'id_sujet');
    }
}
