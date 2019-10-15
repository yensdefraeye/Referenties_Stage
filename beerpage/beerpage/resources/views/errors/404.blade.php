@extends('partials.master')

@section('content')
    <div class="error404">
        <p>Deze pagina werd niet gevonden..</p>
        <p>Ga terug naar <a href="{{route('index')}}">Home</a>.</p>
    </div>
@endsection