<?php

namespace App\Http\Controllers;

use App\Models\Pets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Session;

class PetsController extends Controller
{
    public function __invoke()
    {
        $runners= User::get();
        return view('User.index',[
            'runners' => $runners,
        ]);
    }

    public function login() {
        return view('login');
    }

    public function validateUserCredentials(Request $request, Pets $pets) {
        $rows = $pets->where('username',$request->username)->where('password',$request->password)->count();

        if($rows == 1) {
            Session::put('username',$request->username);
            return redirect()->route('pets.parelles');
        }
    }

    public function mostrarParelles(Request $request) {

        if(Session::has('username')) {
            $selectedPet = Pets::where('username',$request->session()->get('username'))->first();

            $raça = $selectedPet->breed;
            $sexe = $selectedPet->gender;

            $compatiblePets = Pets::where('breed',$raça)->where('gender','!=',$sexe)->get();

            return view('Pets.parelles', ['compatiblePets' => $compatiblePets]);

        }
        return view('Pets.parelles');

    }

    public function mostrarFoto($id) {

        $selectedPet = Pets::where('id',$id)->first();


        return view('Pets.pictures', ['selectedPet' => $selectedPet]);
    }

    public function logout(Request $request) {

        $request->session()->flush();

        return redirect()->route('index.index');
    }

    public function showRegisterForm($succesfulRegister = '0') {
        
        return view('Pets.register',['succesfulRegister' => $succesfulRegister]);
    }

    public function registerPet(Request $request, Pets $pets) {
        $petData = $request->validate($pets->validationRules());

        $path = Storage::putFile('petsPictures', $request->file('picture'));
        $petData['picture'] = $path;

        $pets->create($petData);

        return redirect()->route('pets.registerForm',['succesfulRegister' => '1']);
    }
}
