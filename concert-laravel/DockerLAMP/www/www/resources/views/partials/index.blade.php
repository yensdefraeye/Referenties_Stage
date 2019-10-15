@extends('master')

@section('maincontent')
<!-- Main -->
<div id="main">
    <!-- Event table -->
    <section id="event_table">
        <header class="major">
            <h2>Overzicht concerten</h2>
        </header>
        <form method="get" action="{{url('/search')}}">
            <div class="row uniform 50%">
                <div class="6u 12u$(xsmall)"></div>
                <div class="3u 12u$(xsmall)">
                    <input type="text" name="search" id="search" value="" placeholder="Zoekterm" />
                </div>
                <div class="3u 12u$(xsmall)">
                    <input type="submit" value="Zoeken" class="special fit small" style="height: 3.4em"/>
                </div>
            </div>
        </form>
        <div class="table-wrapper">
            <table>
                <thead>
                <tr>
                    <th>Datum</th>
                    <th>Naam en locatie</th>
                    <th>Prijs</th>
                </tr>
                </thead>
                <tbody>
                @if(count($events) > 0)
                    @foreach($events as $event)
                        <tr>
                            <td>{{ $event->start_date }}</td>
                            <td><a href="{{url('/detail/' . $event->id)}}">{{ $event->title }} ({{ $event->location }})</a> @if($event->fav == 1)<a class="icon fa-star" />@endif<br/>
                                <form method="post" action="{{url('/switch')}}" style="margin: 0">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="event_id" value="{{ $event->id}}" />
                                    <input type="hidden" name="fav" value="{{ $event->fav}}" />
                                    <input type="hidden" name="moduleAction" value="switch" />
                                    @if($event->fav == 0)
                                        <input type="submit" value="voeg toe aan favorieten" class="small" style="line-height:0em; height: 2em"/>
                                    @elseif($event->fav == 1)
                                        <input type="submit" value="verwijder uit favorieten" class="small" style="line-height:0em; height: 2em"/>
                                    @endif
                                </form>
                            </td>
                            <td>{{ $event->price }} &euro;</td>
                        </tr>
                    @endforeach
                @else
                    <p>Er werden geen concerten gevonden</p>
                @endif
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection