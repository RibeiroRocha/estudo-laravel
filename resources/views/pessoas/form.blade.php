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
        <input class="form-control" type="text" name="nome" placeholder="Nome" value="{{ $pessoa->nome ?? ''}}" > {{--required obriga o usuário a digitar o campo--}}
        @error('nome')
            <small class="text-danger">{{ $message }}</small>           
        @enderror
        <input class="form-control" type="text" name="telefone" placeholder="Telefone" value="{{ $pessoa->telefone ?? ''}}">
        @error('telefone')
        <small class="text-danger">{{ $message }}</small>           
        @enderror
         <input class="form-control" type="text" name="email" placeholder="Email" value="{{ $pessoa->email ?? ''}}">         
        <input class="form-control" type="text" name="cpf" placeholder="Cpf" value="{{ $pessoa->cpf ?? ''}}"> 
        <input class="btn btn-primary" type="submit" value="Salvar">
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    

    <a href="/pessoas">Voltar</a>


@endsection