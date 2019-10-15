<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //get all concerts from db
    public function index(){
        $concerts = DB::table('concerts')->get();
        //render template
        return view('partials.index', ['events' => $concerts]);
    }

    //update fav from concert by id
    public function switchFav(Request $request)
    {
        //update
         DB::table('concerts')
             ->where('id', $request['event_id'])
             ->update(['fav' => 1 - $request['fav']]);

         //render template
        $concerts = DB::table('concerts')->get();
        return view('partials.index', ['events' => $concerts]);
    }

    //search concerts
    public function searchConcerts(Request $request){
        //get concerts
        $concerts = DB::table('concerts')
            ->where('title', 'LIKE', "%{$request['search']}%")
            ->get();
        //render template
        return view('partials.index', ['events' => $concerts]);
    }

    //show the details
    public function showDetails($id){
        //alle images met id ophalen
        $images = DB::table('images')->where('concert_id', $id)->get();

        //event met id ophalen
        $event = DB::table('concerts')->where('id', $id)->first();

        //render template
        return view('partials.detail', ['images' => $images, 'event' => $event]);
    }

    //show the clicked image
    public function showImage(Request $request, $id, $path){
        //image ophalen
        $image = DB::table('images')->where('path', $path)->first();

        //event met id ophalen
        $event = DB::table('concerts')->where('id', $id)->first();

        //previous path
        $previous = url()->previous();

        //render template
        return view('partials.image', ['image' => $image, 'event' => $event, 'previous' => $previous]);
    }
}
