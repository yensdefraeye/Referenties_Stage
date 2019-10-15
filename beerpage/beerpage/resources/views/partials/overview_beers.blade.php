@extends('partials.master')

@section('content')

    <div class="container">

        <div class="filter-beers">
            <!-- Filter Beer Form -->
            {!! Form::open(['route' => 'beers.search']) !!}

            <div class="form-group">

                <ul>
                    <li>
                        {!! Form::label('searchfield', 'Zoekveld') !!}
                        {!! Form::text('searchfield', old('searchfield', $request->searchfield), ['class' => 'form-control']) !!}
                    </li>
                    <li>
                        {!! Form::label('brewery', 'Brouwerij') !!}
                        {!! Form::select('brewery', $breweries, old('brewery', $request->brewery), ['class' => 'form-control']) !!}
                    </li>
                    <li>
                        {!! Form::label('category', 'Categorie') !!}
                        {!! Form::select('category', $categories, old('category', $request->category), ['class' => 'form-control']) !!}
                    </li>
                    <li>
                        {!! Form::label('origin_country', 'Land van herkomst') !!}
                        {!! Form::text('origin_country', old('origin_country', $request->origin_country), ['class' => 'form-control']) !!}
                    </li>
                    <li>
                        {!! Form::submit('zoek', ['class' => 'btn btn-primary pull-right search-btn']) !!}
                    </li>
                </ul>

            </div>

            {!! Form::close() !!}
        </div>

        <div class="all-beers">
            <ul>
                @if($beers->count() > 0)
                    @foreach($beers as $beer)
                        <li class="list">
                            <div class="row-content">
                                <div class="box-beers">
                                    <div class="col-lg-12">
                                        <hr>
                                        <h2 class="intro-text text-center">{{$beer->brand}}
                                            <strong>{{$beer->name}}</strong>
                                        </h2>
                                        <hr>
                                    </div>
                                    <!--
                                    <div class="left">
                                        <img class="img-responsive img-border-left" src="{{asset('./img/beers/' . $beer->image_path)}}" alt="">
                                    </div>
                                    <div class="right">
                                        <h3>Brouwerij {{$beer->brewery->name}}</h3>
                                        <h3>{{$beer->alcohol_content}}°</h3>
                                        <a href="{{route('beer.detail', ['id' => $beer->id])}}">Ontdek {{$beer->brand}} {{$beer->name}}</a>
                                    </div>
                                    -->

                                    <div class="overview-beers-img">
                                        <img class="img-responsive img-border-left" src="{{asset('./img/beers/' . $beer->image_path)}}" alt="">
                                    </div>

                                    <div class="overview-beers-text">
                                        <h3>Brouwerij {{$beer->brewery->name}}</h3>
                                        <a class="btn" href="{{route('beer.detail', ['id' => $beer->id])}}">Ontdek {{$beer->brand}} {{$beer->name}}</a>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @else
                    <div class="empty-content">
                        <p>Er werden geen bieren gevonden.</p>
                    </div>
                @endif
            </ul>
        </div>

    </div>
@endsection