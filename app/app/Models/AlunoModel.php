<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoModel extends Model
{
    use HasFactory;
    protected $table = 'aluno';
    protected $primaryKey = 'idaluno';
    public $timestamps = false;

    public function __get($key)
    {
        return $this->getAttribute($key);
    }
}
