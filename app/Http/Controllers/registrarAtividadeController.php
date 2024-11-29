<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloAgenda;

class registrarAtividadeController extends Controller
{
    public function index()
    {
        $dados = modeloAgenda::all(); //Todos os dados do banco
        return view('paginas.cadastrar') -> with('dados',$dados);
    }//Fim do Index

    public function store(Request $request)
    {
        $data = $request -> input('dataEvento');
        $descricao = $request -> input('descricaoTexto');

        $model = new modeloAgenda();
        $model -> dataEvento = $data;
        $model -> descricao = $descricao;

        $model -> save(); //Armazenar no BD
        return redirect('/cadastrar');
    }//Fim do Store

    public function consultar()
    {
        $ids = modeloAgenda::all();
        return view('paginas.consultar',compact('ids'));
    }//Fim do Consultar

    public function editar($id)
    {
        $dado = modeloAgenda::findOrFail($id);
        return view('paginas.editar', compact('dado'));
    }//Fim do Editar

    public function atualizar(Request $request, $id)
    {
        modeloAgenda::where('id',$id) -> update($request -> all());
        return redirect('/consultar');
    }//Fim do Atualizar

    public function excluir(Request $request, $id)
    {
        modeloAgenda::where('id',$id) -> delete($request -> all());
        return redirect('/consultar');
    }//Fim do Excluir
}//Fim da Classe
