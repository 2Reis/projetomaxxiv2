@extends('layouts.app')

@section('title','Cadastrar')

@section('content')

<div class="container mt-5">
<div class="row">
      <div class="col-sm-10">
         <h1>Listagem de Farmacos</h1>
      </div>
      <div class="col-sm-2">
         <a href="{{ route('farmacos-create') }}" class="btn btn-success">Novo Farmaco</a>
      </div>    
   </div>
         <table class="table">
            <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Nome</th>
               <th scope="col">Categoria</th>
               <th scope="col">Fabricacao</th>
               <th scope="col">Valor</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($farmacos as $farmaco)             
               <tr>
                  <th>{{ $farmaco->id }}</th>
                  <th>{{ $farmaco->nome }}</th>
                  <td>{{ $farmaco->categoria }}</td>
                  <td>{{ $farmaco->fabricacao}}</td>
                  <td>{{ $farmaco->valor }}</td>
            @endforeach 
            </tr>      
            </tbody>
         </table> 
   </div>      
@endsection