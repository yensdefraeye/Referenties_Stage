@extends('partials.master')

@section('content')

    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Editeer
                <strong>{{$beer->brand}} {{$beer->name}}</strong>
            </h2>
            <hr>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <!-- Edit Beer Form -->
            {!! Form::model($beer, ['route' => ['update', $beer->id], 'files' => true]) !!}

            <div class="form-group">

                {!! Form::label('brand', 'Merk:') !!}
                {!! Form::text('brand', old('brand', $beer->brand), ['class' => 'form-control']) !!}

                {!! Form::label('name', 'Naam:') !!}
                {!! Form::text('name', old('name', $beer->name), ['class' => 'form-control']) !!}

                {!! Form::label('alcohol_content', 'Alcoholpercentage:') !!}
                {!! Form::text('alcohol_content', old('alcohol_content', $beer->alcohol_content), ['class' => 'form-control']) !!}

                {!! Form::label('category', 'Categorie:') !!}
                {!! Form::select('category', $categories, $beer->category_id, ['class' => 'form-control']) !!}

                {!! Form::label('origin_country', 'Land van herkomst:') !!}
                {!! Form::text('origin_country', old('origin_country', $beer->origin_country), ['class' => 'form-control']) !!}

                {!! Form::label('plato_scale', 'Plato-schaal:') !!}
                {!! Form::text('plato_scale', old('plato_scale', $beer->plato_scale), ['class' => 'form-control']) !!}

                {!! Form::label('brewery', 'Brouwerij:') !!}
                {!! Form::select('brewery', $breweries, $beer->brewery_id, ['class' => 'form-control']) !!}

                {!! Form::label('image', 'Afbeelding:') !!}
                {!! Form::file('image'); !!}

                {!! Form::label('description', 'Beschrijving:') !!}
                {!! Form::textarea('description', old('description', $beer->description), ['class' => 'form-control', 'rows' => '5']) !!}

            </div>

            {!! Form::submit('ga door', ['class' => 'btn btn-primary pull-right']) !!}
            {!! Form::close() !!}

        </div>
    </div>

@endsection