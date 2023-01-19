@extends('layouts.app')
@section('title', 'Pessoas')

@section('content')
    <div class="container mt-5">

    <div class="row">
        <div class="col-sm-10">
            <h1>Novo</h1>
        </div>

        <div class="col-sm-2">
            <a href="{{route('pessoas-index')}}" class="btn btn-outline-primary">Lista</a>
        </div>

    </div>

    <hr>

    <form class="row g-3" action="{{route('pessoas-store')}}" method="POST">
        @csrf
    <div class="col-md-4">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="Mark" required>
    </div>
    <div class="col-md-4">
        <label for="sobrenome" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="Otto">
    </div>
    <div class="col-md-4">
        <label for="email" class="form-label">Email</label>
        <div class="input-group">
        <span class="input-group-text" id="email">@</span>
        <input type="text" class="form-control" id="email" name="email"  aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <div class="col-md-3">
        <label for="razao_social" class="form-label">razão Social</label>
        <input type="text" class="form-control" id="razao_social" name="razao_social" >
    </div>
    <div class="col-md-3">
        <label for="tp_pessoa" class="form-label">Tipo de pessoa</label>
        <select class="form-select" id="tp_pessoa" name="tp_pessoa" required>
        <option selected disabled value="">Selecione</option>
        <option value="Física" id="tp_pessoa-f" name="tp_pessoa">Física</option>
        <option value="Jurídica" id="tp_pessoa-j" name="tp_pessoa">Jurídica</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="cpfCnpj" class="form-label">CPF/CNPJ</label>
        <input type="text" class="form-control" id="cpfCnpj" name="cpfCnpj" required>
    </div>
    <div class="col-md-3">
        <label for="dt_nasc" class="form-label">Data de nascimento</label>
        <input type="text" class="form-control" id="dt_nasc" name="dt_nasc" required>
    </div>
    
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
</form>

    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="\js\pessoas.js"></script>

@endsection