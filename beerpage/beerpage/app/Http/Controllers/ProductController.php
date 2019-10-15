<?php

namespace App\Http\Controllers;

use App\Http\Middleware\User;
use http\Url;
use Illuminate\Http\Request;
use App\Beer;
use App\Brewery;
use App\Category;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index() //show the index page
    {
        $beer = Beer::all()->random(1)->first();
        $brewery = Brewery::all()->random(1)->first();

        return view('partials.index', [
            'beer' => $beer,
            'brewery' => $brewery
        ]);
    }

    public function beers(Request $request) //show the beers with form
    {
        //breweries from DB for dropdown
        $breweries = Brewery::pluck('name', 'id')->all();

        //categories from DB for dropdown
        $categories = Category::pluck('kind', 'id')->all();

        //all beers
        $beers = Beer::all();

        return view('partials.overview_beers', [
            'categories' => $categories,
            'beers' => $beers,
            'breweries' => $breweries,
            'request' => $request
        ]);
    }

    public function beers_search(Request $request) //show the found beers
    {
        //breweries from DB for dropdown
        $breweries = Brewery::pluck('name', 'id')->all();

        //categories from DB for dropdown
        $categories = Category::pluck('kind', 'id')->all();

        $searched_brewery = $request->brewery;
        $searched_cat = $request->category;
        $searched_field = $request->searchfield;
        $searched_country = $request->origin_country;

        //filter beers
        $beers = Beer::where('brand', 'LIKE', '%'.$searched_field.'%')
            ->orWhere(function ($query) use ($searched_field){
                $query->where('name', 'LIKE', '%'.$searched_field.'%');
            })
            ->Where(function ($query) use ($searched_cat,$searched_brewery, $searched_country){
                $query
                    ->where('category_id', '=', $searched_cat)
                    ->Where('brewery_id', '=', $searched_brewery)
                    ->Where('origin_country', 'LIKE', '%'.$searched_country.'%')
                ;
            })
            ->get();

        return view('partials.overview_beers', [
            'categories' => $categories,
            'beers' => $beers,
            'breweries' => $breweries,
            'request' => $request
        ]);
    }

    public function breweries() //show the breweries
    {
        $breweries = Brewery::all();

        return view('partials.overview_breweries', [
            'breweries' => $breweries
        ]);
    }

    public function beer_detail($id) //show the details of beer
    {
        $beer = Beer::find($id);
        $previous = url()->previous();

        //if user is logged in, pass favourite beers to template
        if (Auth::check()){
            $favBeers = Auth::user()->beers()->get();
            $isFav = false;
            foreach ($favBeers as $favbeer){
                if ($favbeer->id === $beer->id){
                    $isFav = true;
                    break;
                }else $isFav = false;
            }

            return view('partials.detail_beer', [
                'beer' => $beer,
                'previous' => $previous,
                'favBeers' => $favBeers,
                'isFav' => $isFav
            ]);

        } else {

            return view('partials.detail_beer', [
                'beer' => $beer,
                'previous' => $previous
            ]);
        }
    }

    public function brewery_detail($id) //show the details of brewery
    {
        $brewery = Brewery::find($id);
        $previous = url()->previous();

        //check if brewery existst
        $beers = isset($brewery) ? $brewery->beers : null;

        return view('partials.detail_brewery', [
            'brewery' => $brewery,
            'previous' => $previous,
            'beers' => $beers
        ]);
    }
}
