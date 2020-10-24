@extends('template.base')

@section('titulo','Formulário de Pessoa')

@section('conteudo')
    

    <h1>Formulário de Pessoas</h1>

    
    @if (isset($pessoa)) {{-- se existir pessoa--}}
         <form action="/pessoas/{{ $pessoa->id }}" method="post"> 
            @method('PUT')
    @else 
         <form action="/pessoas" method="post">
    @endif

        @csrf
        <input type="text" name="nome" placeholder="Nome" value="{{ $pessoa->nome ?? ''}}">
        <input type="text" name="telefone" placeholder="Telefone" value="{{ $pessoa->telefone ?? ''}}">
        <input type="text" name="email" placeholder="Email" value="{{ $pessoa->email ?? ''}}"> 
        <input type="submit" value="Salvar">
    </form>
    

    <a href="/pessoas">Voltar</a>
@endsection