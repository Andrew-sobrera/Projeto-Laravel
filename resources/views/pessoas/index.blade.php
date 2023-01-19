@extends('layouts.app')
@section('title', 'Pessoas')

@section('content')

<div class="container mt-5">  
    <div class="row">
        <div class="col-sm-10">
            <h1>Listagem</h1>
        </div>

        <div class="col-sm-2">
            <a href="{{route('pessoas-create')}}" class="btn btn-outline-primary">Novo</a>
        </div>

    </div>

    <hr>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Tipo Pessoa</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pessoas as $pessoa)
    <tr>
        <th scope="row">{{$pessoa->id}}</th>
        <td>{{$pessoa->nome}}</td>
        <td>{{$pessoa->email}}</td>
        <td>{{$pessoa->tp_pessoa}}</td>
    </tr>
    @endforeach  
  
  </tbody>
</table>
</div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="\js\pessoas.js"></script>
@endsection