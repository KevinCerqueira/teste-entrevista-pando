<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoAlunoModel extends Model
{
    use HasFactory;
    protected $table = 'cursoaluno';
    protected $primaryKey = ['idcurso', 'idaluno'];
    public $timestamps = false;
}
