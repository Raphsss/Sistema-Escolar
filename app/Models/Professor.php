<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    /**
     * The table associated with the model.
     * @var string
    */
    protected $table = 'professores';

    protected $fillable = [
        'nome',
    ];

    function Turmas(){
        return $this->belongsToMany(Turma::class)->orderBy('nome', 'asc');
    }

    function Disciplinas(){
        return $this->belongsToMany(Disciplina::class)->orderBy('nome', 'asc');
    }
}
