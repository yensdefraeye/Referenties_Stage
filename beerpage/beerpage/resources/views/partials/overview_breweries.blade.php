@extends('partials.master')

@section('content')

    <div class="container">

        <ul>
            @foreach($breweries as $brewery)
                <li class="list">
                    <div class="row-content">
                        <div class="box">
                            <div class="col-lg-12">
                                <hr>
                                <h2 class="intro-text text-center">Brouwerij
                                    <strong><a href="{{route('brewery.detail', ['id' => $brewery->id])}}">{{$brewery->name}}</a></strong>
                                </h2>
                                <hr>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

    </div>

@endsection