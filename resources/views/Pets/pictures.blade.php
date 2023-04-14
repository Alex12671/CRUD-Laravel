@extends('layout.layout')

@section('title','Laravel')

@section('header')
    @include('layout.header')

@section('component')

<div class="container d-flex align-items-center flex-column">
    @if(Session::has('username'))
    <img src="{{asset($selectedPet->picture)}}" width="600px" class="img-fluid mx-auto d-block">
    <a class="text-center" href="{{route('pets.parelles')}}">Volver a la página principal</a>
    @else
    <p class="display-6">Debes iniciar sesión para acceder a esta página!</p>
    <meta http-equiv="refresh" content="4; URL='/'" /> 
    @endif
</div>

@section('footer')
    @include('layout.footer')