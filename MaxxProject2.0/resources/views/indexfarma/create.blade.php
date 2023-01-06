@extends('layouts.app')

@section('title','Listagem')

@section('content')
   <div class="container">
      <h1>Cadastrar farmaco</h1>
      <hr>
      <form action="{{route('farmacos-store')}}"method="POST"()>
         @csrf
            <div class="form-group">
               <div class="group">
                  <label for="nome">Nome:</label>
                  <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
               </div>
               <br>
               <div class="group">
                  <label for="categoria">Categoria:</label>
                  <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria...">
               </div>
               <br>
               <div class="group">
                  <label for="fabricacao">Ano:</label>
                  <input type="number" class="form-control" name="fabricacao" placeholder="Ano de criacao...">
               </div>
               <br>
               <div class="group">
                  <label for="valor">Preço:</label>
                  <input type="number" class="form-control" name="valor" placeholder="Digite o valor...">
               </div>
               <br>
               <div class="group">
                  <input type="submit" name="submit" class="btn btn-primary">
               </div>
            </div>
      </form>
   </div>
@endsection