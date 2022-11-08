<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    protected $fillable = [
        'tarefa', 'data_inicial', 'data_final', 'criador', 'editado'
    ];
}
