@extends('layout.layout')

@section('title','Laravel')

@section('header')
    @include('layout.header')

@section('component')

<div class="container">
    @if(Session::has('username'))
        @if(count($compatiblePets) > 0)
        <table class="table table-striped table-bordered">
            <th>Nom de la possible parella</th>
            <th>Edat</th>
            <th>Color</th>
            <th>Nom del seu humà</th>
            <th>Telèfon del seu humà</th>
            <th>Fotos</th>
            @foreach($compatiblePets as $pet)
            <tr>
            <td>{{$pet->name}}</td>
            <td>{{$pet->edat}}</td>
            <td>{{$pet->color}}</td>
            <td>{{$pet->ownerName}}</td>
            <td>{{$pet->phoneNumber}}</td>
            <td><a href="{{route('pets.picture',$pet->id)}}">Veure foto</a></td>
            {{-- <td><img src="{{asset($pet->picture)}}"></td> --}}
            </tr>
            @endforeach
        </table>
        @else
        <p>Parece que no hay mascotas compatibles con la tuya...</p>
        @endif
    @else
    <p class="display-6">Debes iniciar sesión para acceder a esta página!</p>
    <meta http-equiv="refresh" content="4; URL='/'" /> 
    @endif
</div>

@section('footer')
    @include('layout.footer')