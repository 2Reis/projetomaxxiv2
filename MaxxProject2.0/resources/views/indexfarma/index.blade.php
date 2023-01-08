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
               <th scope="col">...</th>
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
                  <th>
                     <a href="{{ route('farmacos-edit',['id'=>$farmaco->id])}}" class='btn btn-primary'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                           <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                           <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                     </a>
                  </th>
            @endforeach 
            </tr>      
            </tbody>
         </table> 
   </div>      
@endsection