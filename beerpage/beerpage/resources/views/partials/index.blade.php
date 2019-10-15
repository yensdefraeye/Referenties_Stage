@extends('partials.master')

@section('content')

    <div class="container">

        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div> <!-- end .flash-message -->

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Bier
                        <strong>in de kijker</strong>
                    </h2>
                    <hr>
                    <img class="img-index" src="{{asset('./img/beers/' . $beer->image_path)}}" alt="">
                    <div class="txt-index">
                        <hr class="visible-xs">
                        <h3><a href="{{route('beer.detail', ['id' => $beer->id])}}">{{$beer->brand}} {{$beer->name}}</a></h3>
                        <h4>{{$beer->brewery->name}}</h4>
                        <p>
                            {{$beer->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Brouwerij
                        <strong>in de kijker</strong>
                    </h2>
                    <hr>
                    <img class="img-index-brewery" src="{{asset('./img/breweries/' . $brewery->image_path)}}" alt="">
                    <div class="txt-index-brewery">
                        <hr class="visible-xs">
                        <h3><a href="{{route('brewery.detail', ['id' => $brewery->id])}}">Brouwerij {{$brewery->name}}</a></h3>
                        <h4>{{$brewery->address}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection