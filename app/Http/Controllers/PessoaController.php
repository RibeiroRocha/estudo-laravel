<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pessoas = \App\Pessoa::all(); //todas as pessoas do banco
        $pessoas = \App\Pessoa::paginate(10); //cria 10 pessoas por pagina.
      
        return view('pessoas.index', compact('pessoas'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pessoa = new \App\Pessoa();

        $pessoa->nome = $request->nome;
        $pessoa->telefone =$request->telefone;
        $pessoa->email = $request->email;

        $pessoa->save();

        return redirect('/pessoas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pessoa = \App\Pessoa::find($id); //encontra a lista de pessoas que estão na pasta App
        return view( 'pessoas.show', compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = \App\Pessoa::find($id);
        return view('pessoas.form', compact('pessoa')); //pega lista de pessoas e transforma em array

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pessoa = \App\Pessoa::find($id); //procura pelo id e puxa pessoa
        $pessoa->nome = $request->nome;
        $pessoa->telefone =$request->telefone;
        $pessoa->email = $request->email;

        $pessoa->save();

        return redirect('/pessoas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = \App\Pessoa::find($id); 
        $pessoa->delete();
        return redirect('/pessoas');
    }
}
