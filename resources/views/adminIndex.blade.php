@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')
<div class="container d-flex flex-row justify-content-around align-items-center adminIndexDiv">
    <a href="{{ route('runners') }}" class="adminLinks">
        <div class= "d-flex flex-column align-items-center sectionDiv me-3">
            <p class="sectionTitle">CORREDORES</p>
            <img class="runnersImg" src="{{ asset('img/runners-icon.png') }}">
        </div>
    </a>
</div>
@section('footer')
    @include('layout.footer')
