@extends('layouts.app')

@section('title','Editar')

@section('content')
   <div class="container">
      <h1>Editar farmaco</h1>
      <hr>
      <form action="{{route('farmacos-update',['id'=>$farmacos->id]) }}"method="POST">
         @csrf
         @method('PUT')
            <div class="form-group">
               <div class="group">
                  <label for="nome">Nome:</label>
                  <input type="text" class="form-control" name="nome" value={{$farmacos->nome}} placeholder="Digite um nome...">
               </div>
               <br>
               <div class="group">
                  <label for="categoria">Categoria:</label>
                  <input type="text" class="form-control" name="categoria" value={{$farmacos->categoria}} placeholder="Digite uma categoria...">
               </div>
               <br>
               <div class="group">
                  <label for="fabricacao">Ano:</label>
                  <input type="number" class="form-control" name="fabricacao" value={{$farmacos->fabricacao}} placeholder="Ano de criacao...">
               </div>
               <br>
               <div class="group">
                  <label for="valor">Preço:</label>
                  <input type="number" class="form-control" name="valor" value={{$farmacos->valor}} placeholder="Digite o valor...">
               </div>
               <br>
               <div class="group">
                  <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
               </div>
            </div>
      </form>
   </div>
@endsection