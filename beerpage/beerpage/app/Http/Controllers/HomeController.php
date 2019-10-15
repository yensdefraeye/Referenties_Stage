<?php

namespace App\Http\Controllers;

use App\Brewery;
use Illuminate\Http\Request;
use App\Role;
use Auth;
use App\User;
use App\Beer;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashbord() //show user dashbord
    {
        //the logged in user
        $user = Auth::user();

        //the users fav beers
        $beers = $user->beers()->get();

        return view('partials.home', [
            'user' => $user,
            'beers' => $beers
        ]);
    }

    public function switchFavourite(Request $request, $id) //switch the favourite beer
    {
        //the beer to switch
        $beer = Beer::find($id);

        //the user that wants to switch
        $user = Auth::user();

        //if beers is favourite detach, else attach
        if ($user->beers()->find($id) == null){
            $request->session()->flash('alert-success', 'Je hebt een biertje toegevoegd aan je favorieten.');
            $user->beers()->attach($id);
        } elseif ($user->beers()->find($id) != null){
            $request->session()->flash('alert-success', 'Je hebt een biertje verwijderd uit je favorieten.');
            $user->beers()->detach($id);
        }

        return redirect('index');
    }
}
