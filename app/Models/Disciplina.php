<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = [
        'nome',
        'descricao'
    ];

    function Professor(){
        return $this->belongsToMany(Professor::class)->orderBy('nome', 'asc');
    }
}
