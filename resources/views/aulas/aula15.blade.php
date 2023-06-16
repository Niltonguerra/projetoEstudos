@extends('layouts.main')

@section('title','aula08')


@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>crie seu evento</h1>

    <form action="/aulas" method="POST" enctype="multipart/form-data">
        {{-- a diretiva '@csrf' é essencial, uma vez que se ela não for
        colocada o formulario não será enviado e cadastrado no banco!--}}
        @csrf

        {{-- imagem --}}
    <div class="form-group">
        <label for="image">imagem:</label>
        <input type="file" class="form-control-file" id="image" name="image" placeholder="Nome do evento">
    </div>


    <div class="form-group">
        <label for="title">Evento:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
    </div>
    <div class="form-group">
        <label for="title">cidade:</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="cidade do envento">
    </div>
    <div class="form-group">
        <label for="title">Evento é privado:</label>
        <select name="private" id="private" class="form-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">descrição:</label>
    <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?" cols="30" rows="10"></textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="Criar evento">
    </form>
</div>

@endsection
