<?php

namespace App\Http\Controllers;

use App\Brewery;
use App\Category;
use App\Beer;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create() //show the form to create a new beer
    {
        //breweries from DB for dropdown
        $breweries = Brewery::pluck('name', 'id')->all();

        //categories from DB for dropdown
        $categories = Category::pluck('kind', 'id')->all();

        return view('partials.create_beer', [
            'breweries' => $breweries,
            'categories' => $categories
        ]);
    }

    public function store(Request $request) //store new beer in DB
    {
        /* Check the incoming data: Incorrect */
        $validatedData = $request->validate([
            'brand' => 'required|max:30|min:3',
            'name' => 'required|max:30|min:3',
            'alcohol_content' => 'required|between:0,14.99|numeric',
            'category' => 'required',
            'origin_country' => 'required|min: 3',
            'plato_scale' => 'required|between:0,19.99|numeric',
            'brewery' => 'required',
            'image' => 'required|image:png',
            'description' => 'required|max:600|min:10'
        ]);

        /* Check the incoming data: Correct */
        //move image to './img/beers/
        request()->image->move(public_path('./img/beers/'), $request->image->getClientOriginalName());

        //save beer to DB
        Beer::create($request);

        //redirect to beers overview and flash newly added beer
        $request->session()->flash('alert-success', $request->brand . ' ' . $request->name . ' is succesvol toegevoegd!');
        return redirect()->route('index');
    }

    public function edit($id) //show the form to edit a beer
    {
        //breweries from DB for dropdown
        $breweries = Brewery::pluck('name', 'id')->all();

        //categories from DB for dropdown
        $categories = Category::pluck('kind', 'id')->all();

        $beer = Beer::find($id);

        return view('partials.edit_beer', [
            'breweries' => $breweries,
            'categories' => $categories,
            'beer' => $beer
        ]);
    }

    public function update(Request $request, $id) //update edited beer in DB
    {
        /* Check the incoming data: Incorrect */
        $validatedData = $request->validate([
            'brand' => 'required|max:30|min:3',
            'name' => 'required|max:30|min:3',
            'alcohol_content' => 'required|between:0,14.99|numeric',
            'category' => 'required',
            'origin_country' => 'required|min: 3',
            'plato_scale' => 'required|between:0,19.99|numeric',
            'brewery' => 'required',
            'image' => 'required|image:png',
            'description' => 'required|max:600|min:10'
        ]);

        /* Check the incoming data: Correct */
        //move image to './img/beers/
        $request->image->move(public_path('./img/beers/'), $request->image->getClientOriginalName());

        //save beer to DB
        Beer::edit($request, $id);

        //redirect to beers overview and flash newly added beer
        $request->session()->flash('alert-success', $request->brand . ' ' . $request->name . ' is succesvol bijgewerkt!');
        return redirect()->route('index');
    }

    public function delete($id, Request $request) //delete beer by ID
    {
        $beer = Beer::find($id);
        $beer->delete();

        //redirect to beers overview and flash newly added beer
        $request->session()->flash('alert-success', $beer->brand . ' ' . $beer->name . ' is succesvol verwijderd!');
        return redirect()->route('index');
    }
}
