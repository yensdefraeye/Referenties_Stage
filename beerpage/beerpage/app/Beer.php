<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Beer extends Model
{
    protected $table = 'beers';

    public function brewery()
    {
        return $this->belongsTo('App\Brewery');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'likes');
    }

    public static function create(Request $request) //add new beer in DB
    {
        $beer = new Beer;
        $beer->brand = $request->brand;
        $beer->name = $request->name;
        $beer->alcohol_content = $request->alcohol_content;
        $beer->category_id = $request->category;
        $beer->origin_country = $request->origin_country;
        $beer->plato_scale = $request->plato_scale;
        $beer->brewery_id = $request->brewery;
        $beer->image_path = $request->image->getClientOriginalName();
        $beer->description = $request->description;
        $beer->save();
    }

    public static function edit(Request $request, $id) //update beer in DB
    {
        $beer = Beer::find($id);
        $beer->brand = $request->brand;
        $beer->name = $request->name;
        $beer->alcohol_content = $request->alcohol_content;
        $beer->category_id = $request->category;
        $beer->origin_country = $request->origin_country;
        $beer->plato_scale = $request->plato_scale;
        $beer->brewery_id = $request->brewery;
        $beer->image_path = $request->image->getClientOriginalName();
        $beer->description = $request->description;
        $beer->save();
    }
}
