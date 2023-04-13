@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')
    <script src="{{ asset('js/components/createRunner.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="container d-flex flex-column justify-content-around align-items-center createRunnerformDiv">
        <h1 class="formTitle">EDITAR USUARIO</h1>
        <form action="{{ route('runners.update', $runner['dni']) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4 runnerInput">
                <input name="dni" type="text" value="{{ old('dni',$runner['dni']) }}" placeholder="DNI"><br>
            </div>
            <div class="mb-4 runnerInput">
                <input name="name" type="text" value="{{ old('name',$runner['name']) }}" placeholder="Nombre"><br>
            </div>
            <div class="mb-4 runnerInput">
                <input name="surname" type="text" value="{{ old('surname',$runner['surname']) }}" placeholder="Apellidos"><br>
            </div>
            <button type="submit" class="submitLogAdminButton">EDITAR USUARIO</button>
        </form>
        <a class="returnFormButton" href="{{ route('runners') }}">VOLVER A PÁGINA PRINCIPAL</a>
</div>
    @foreach ($errors->all() as $error)
            <div class="container">
                <li class="alert alert-danger">{{ $error }}</li>
            </div>
        @endforeach
@section('footer')
@include('layout.footer')
