<?php

namespace App\Http\Controllers;

use App\Tarefas;
use Redirect;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        return view('/crud/cadastrar');
    }

    public function add( Request $request ){
        $tarefa = new Tarefas;

        $tarefa = $tarefa->create( $request->all() );

        return Redirect::to('/');
    }
    
    public function editar( $id ){
        
        $tarefa = Tarefas::findOrFail( $id );
        
        return view('/crud/editar', ['tarefa' => $tarefa]);
    }
    
    public function update( $id, Request $request ){
        $tarefa = Tarefas::findOrFail( $id );
        
        $tarefa->update( $request->all() );
        
        \Session::flash('msg_update', 'Atualizado com sucesso!');
        
        return Redirect::to('/');
    }
    
    public function delete( $id ){
        
        $tarefa = Tarefas::findOrFail( $id );
        
        $tarefa->delete();
        
        return Redirect::to('/');
    }
}
