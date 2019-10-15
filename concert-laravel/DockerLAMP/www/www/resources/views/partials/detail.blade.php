@extends('master')

@section('maincontent')
<!-- Main -->
<div id="main">
    <!-- Event table -->
    <section id="concert">
        <header class="major">
            <h2>{{$event->title}}</h2>
        </header>
        <div class="table-wrapper">
            <table>
                <tbody>
                <tr>
                    <th>Datum</th>
                    <td>{{$event->start_date}}</td>
                </tr>
                <tr>
                    <th>Locatie</th>
                    <td>{{$event->location}}</td>
                </tr>
                <tr>
                    <th>Prijs</th>
                    <td>
                        {{$event->price}} &euro;
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="box alt">
                <div class="row 50% uniform">
                    @foreach($images as $image)
                        <div class="4u"><a href="{{$event->id}}/image/{{$image->path}}" class="image fit thumb"><img src="{{asset('../public/images/'. $image->path)}}" alt="TM1" /></a></div>
                    @endforeach
                </div>
            </div>
            <p><a href="{{url('/')}}">Terug naar overzicht</a></p>
        </div>
    </section>
</div>
@endsection