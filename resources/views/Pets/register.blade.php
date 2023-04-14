@extends('layout.layout')

@section('title','Laravel')

@section('header')
    @include('layout.header')

@section('component')
<div class="container-fluid d-flex flex-column justify-content-start align-items-center w-50 bg-white">
    <h1 class="formTitle">Registrar mascota</h1>
    @if($succesfulRegister == 1)
    <div class="bg-success rounded p-3">
        <p class="text-center text-white m-0">El registro se ha efectuado correctamente</p>
    </div>
    @endif
        <form class="mt-4" method="POST" action="{{ route('pets.register') }}" enctype='multipart/form-data' >
            @csrf
            <div class="row">
                <div class="col">
                    <input class="form-control mb-2" type="text" name="username" placeholder="Nombre de usuario" required>
                </div>
                <div class="col">
                    <input class="form-control mb-2" type="password" name="password" placeholder="Contraseña" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="form-control mb-2" type="text" name="name" placeholder="Nombre" required>
                </div>
                <div class="col">
                    <select class="form-control" name="breed" required>
                        <option value="" disabled selected>Selecciona una raza</option>
                        <option value="Boxer">Boxer</option>
                        <option value="Buldog">Buldog</option>
                        <option value="Labrador">Labrador</option>
                        <option value="Caniche">Caniche</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <select class="form-control" name="gender" required>
                        <option value="" selected disabled >Selecciona el sexo</option>
                        <option value="Macho">Macho</option>
                        <option value="Hembra">Hembra</option>
                    </select>
                </div>
                <div class="col">
                    <input class="form-control mb-2" type="text" name="color" placeholder="Color" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="form-control mb-2" type="number" name="edat" placeholder="Edad" required>
                </div>
                <div class="col">
                    <input class="form-control mb-2" type="text" name="ownerName" placeholder="Nombre del dueño" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="form-control mb-2" type="number" name="phoneNumber" placeholder="Teléfono" required>
                </div>
                <div class="col">
                    <input class="form-control mb-2" type="file" name="picture" placeholder="Foto" required>
                </div>
            </div>
            <button type="submit" class="submitLogAdminButton">REGISTRAR</button>
            </div>
        </form>
</div>
@section('footer')
    @include('layout.footer')
