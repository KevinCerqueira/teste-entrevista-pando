<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoModel extends Model
{
    use HasFactory;
    protected $table = 'curso';
    protected $primaryKey = 'idcurso';
    public $timestamps = false;
}
