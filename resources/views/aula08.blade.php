@extends('layouts.main')

@section('title','aula08')


@section('content')






<p> &nbsp I <br>❤️<br> &nbsp U</p>


    {{-- <p>{{$busca}}123</p> --}}


    @php
        if (isset($_GET['search'])) {
    $valor = $_GET['search'];
    echo "A variável é: " . $valor;
    } else {
        echo "A variável não foi definida";
    }
    @endphp

@endsection
