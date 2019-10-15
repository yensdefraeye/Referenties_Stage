@extends('master')

@section('maincontent')
<div id="main">
    <!-- Event table -->
    <section id="concert">
        <header class="major">
            <h2>{{$event->title}}</h2>
        </header>
        <div class="table-wrapper">
            <div class="box alt">

                <div class="row 50% uniform">
                    <div class="12u$"><span class="image fit"><img src="{{asset('../public/images/'. $image->path)}}" alt="image#.." /></span></div>
                </div>
            </div>
            <p><a href="{{$previous}}">Terug naar concert</a></p>
        </div>
    </section>
</div>
@endsection