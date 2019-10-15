@extends('partials.master')

@section('content')
<div class="container">
    <div class="box">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Show login form -->
                    {!! Form::open(['route' => ['loginHandle']]) !!}

                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::text('email', '', ['class' => 'form-control']) !!}


                        {!! Form::label('password', 'Paswoord:') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('ga door', ['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
