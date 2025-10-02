<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;

class Aluno extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function turma() {
        return $this->belongsTo(Turma::class);
    }
}
