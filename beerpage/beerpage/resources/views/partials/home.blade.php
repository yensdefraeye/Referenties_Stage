@extends('partials.master')

@section('content')
    @if(!isset($user))
        <p>Deze gebruiker werd niet gevonden.</p>
    @else
        <div class="container">
            <div class="box">
                <div class="col-md-8">
                    <div class="col-lg-12">
                        <hr>
                            <h2 class="intro-text text-center">Favoriete bieren van
                                <strong>{{$user->firstname}} {{$user->lastname}}</strong>
                            </h2>
                        </hr>

                        <!-- Show the favourite beers -->
                        <table class="beers-dashbord">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Merk</th>
                                <th>Naam</th>
                                <th>Brouwerij</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($beers as $beer)
                                    <tr>
                                        <td><img class="img-small" src="{{asset('./img/beers/' . $beer->image_path)}}"></td>
                                        <td><a href="{{route('beer.detail', ['id' => $beer->id])}}">{{$beer->brand}}</a></td>
                                        <td>{{$beer->name}}</td>
                                        <td><a href="{{route('brewery.detail', ['id' => $beer->brewery->id])}}">{{$beer->brewery->name}}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
