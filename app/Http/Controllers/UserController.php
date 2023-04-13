<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function __invoke()
    {
        $runners= User::get();
        return view('User.index',[
            'runners' => $runners,
        ]);
    }

    public function create()
    {
        return view('User.create');
    }

    public function store(Request $request, User $runners)
    {
        $runnersDataValidated= $request->validate($runners->validationRules());

        $runners->create($runnersDataValidated);

        return redirect()->route('runners');
    }

    public function edit($dni)
    {
        $runner= User::where('dni', $dni)->first();

        return view('User.edit', [
            'runner' => $runner,
        ]);
    }

    public function update(Request $request, User $runners, $dni)
    {
        $runnersDataValidated= $request->validate($runners->validationRules());

        User::where('dni', $dni)->update($runnersDataValidated);

        return redirect()->route('runners');

    }

    public function delete(Request $request, User $courses, $dni,$active)
    {
        if($active == 0) {
            User::where('dni', $dni)->update(['active' => '1']);
            $runners= User::get();
            return redirect()->route('runners');

        }
        User::where('dni', $dni)->update(['active' => '0']);
        $runners= User::get();
        return redirect()->route('runners');


    }

    public function search(Request $request)
    {

        $filter = $request->input('filter');
        $searchText = $request->input('searchText');
        $runners= User::where($filter,'LIKE', '%'.$searchText.'%')->get();

        return view('User.index', [
            'runners' => $runners,
        ]);
    }

    public function lookInto(Request $request)
    {

        $filter = $request->input('filter');
        $searchText = $request->input('searchText');
        $runners= User::where($filter,'LIKE', '%'.$searchText.'%')->get();

        return view('User.rankingMain', [
            'runners' => $runners,
        ]);
    }

    public function rankingMain()
    {
        $runners= User::orderby('ranking_points', 'desc')->get();
        return view('User.rankingMain',[
            'runners' => $runners,
        ]);
    }

    public function checkIfRegistered(Request $request) {
        $runners = User::where('dni', $request->input('dni'))->get();
    }

    public function rankingGenderMale()
    {
        $runners= User::where('gender', 'male')->orderby('ranking_points', 'desc')->get();

        return view('User.rankingGender', [
            'runners' => $runners,
        ]);
    }

    public function rankingGenderFemale()
    {
        $runners= User::where('gender', 'female')->orderby('ranking_points', 'desc')->get();

        return view('User.rankingGender', [
            'runners' => $runners,
        ]);
    }

    public function ranking20()
    {
        $today= date("Y-m-d");
        $date = strtotime('-20 year',strtotime($today));
        $date = date("Y-m-d", $date);
        $runners= User::where('date_of_birth', '>=', $date)->orderby('ranking_points', 'desc')->get();

        return view('User.ranking20', [
            'runners' => $runners,
        ]);
    }
    public function ranking30()
    {
        $today= date("Y-m-d");
        $date = strtotime('-30 year',strtotime($today));
        $date = date("Y-m-d", $date);
        $runners= User::where('date_of_birth', '>=', $date)->orderby('ranking_points', 'desc')->get();

        return view('User.ranking30', [
            'runners' => $runners,
        ]);
    }
    public function ranking40()
    {
        $today= date("Y-m-d");
        $date = strtotime('-40 year',strtotime($today));
        $date = date("Y-m-d", $date);
        $runners= User::where('date_of_birth', '>=', $date)->orderby('ranking_points', 'desc')->get();

        return view('User.ranking40', [
            'runners' => $runners,
        ]);
    }
    public function ranking50()
    {
        $today= date("Y-m-d");
        $date = strtotime('-50 year',strtotime($today));
        $date = date("Y-m-d", $date);
        $runners= User::where('date_of_birth', '>=', $date)->orderby('ranking_points', 'desc')->get();

        return view('User.ranking50', [
            'runners' => $runners,
        ]);
    }
    public function ranking60()
    {
        $today= date("Y-m-d");
        $date = strtotime('-60 year',strtotime($today));
        $date = date("Y-m-d", $date);
        $runners= User::where('date_of_birth', '>=', $date)->orderby('ranking_points', 'desc')->get();

        return view('User.ranking60', [
            'runners' => $runners,
        ]);
    }
}
