@extends('layout.layout')

@section('title','Laravel')

@section('header')
    @include('layout.header')

@section('component')
<div class="container d-flex flex-column justify-content-start align-items-center adminFormDiv">
    <h1 class="formTitle">LOGIN</h1>
        <form class="mt-4 logAdminForm" method="POST" action="{{ route('user.validate') }}" >
            @csrf
            <div class="mb-4 logAdminInput">
                <input type="text" name="username" placeholder="Escribe tu usuario...">
            </div>
            <div class="mb-4 logAdminInput">
                <input type="password" name="password" placeholder="Escribe tu contraseña...">
            </div>
            <div>
                <button type="submit" class="submitLogAdminButton">INICIAR SESIÓN</button>
            </div>
        </form>
</div>
@section('footer')
    @include('layout.footer')
