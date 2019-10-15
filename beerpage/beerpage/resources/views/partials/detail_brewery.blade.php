@extends('partials.master')

@section('content')
    @if(!empty($brewery))
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Brouwerij
                    <strong><a href="{{$brewery->website}}">{{$brewery->name}}</a></strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-6">
                <img class="img-responsive img-brewery-detail" src="{{asset('./img/breweries/' . $brewery->image_path)}}" alt="">
            </div>
            <div class="col-md-6">
                <h2>Over</h2>
                <table>
                    <thead>
                    <tr>
                        <th>Oprichting</th>
                        <th>CEO</th>
                        <th>Adres</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$brewery->year_of_foundation}} door {{$brewery->founder}}</td>
                            <td>{{$brewery->CEO}}</td>
                            <td>{{$brewery->address}}</td>
                        </tr>
                    </tbody>
                </table>
                <blockquote>{{$brewery->description}}</blockquote>

                <h2>De Bieren</h2>
                @if($beers->count() > 0)
                    <ul>
                        @foreach($beers as $beer)
                            <li>
                                <h3><a href="{{route('beer.detail', ['id' => $beer->id])}}">{{$beer->brand}} {{$beer->name}}</a></h3>
                            </li>
                        @endforeach
                    </ul>
                    <div class="clearfix"></div>
                @else
                    <p>Brouwerij {{$brewery->name}} heeft geen bieren.</p>
                @endif

                <a class="go-back" href="{{url($previous)}}">Ga terug</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    @else
        <div class="empty-content">
            <p>Deze brouwerij werd niet gevonden.</p>
            <p>Ga terug naar <a href="{{route('index')}}">home</a>.</p>
        </div>
    @endif

@endsection