@extends('partials.master')

@section('content')
    @if(!empty($beer))
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">{{$beer->brand}}
                    <strong>{{$beer->name}}</strong>
                </h2>
                <hr>
            </div>
            <div class="detail-beer-left">
                <img class="img-responsive img-border-left" src="{{asset('./img/beers/' . $beer->image_path)}}" alt="">
            </div>
            <div class="detail-beer-right">
                <h3><a href="{{route('brewery.detail', ['id' => $beer->brewery->id])}}">{{$beer->brewery->name}}</a></h3>

                <table>
                    <thead>
                    <tr>
                        <th>Alcoholpercentage</th>
                        <th>Plato</th>
                        <th>Land van herkomst</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$beer->alcohol_content}}</td>
                        <td>{{$beer->plato_scale}}</td>
                        <td>{{$beer->origin_country}}</td>
                    </tr>
                    </tbody>
                </table>
                <blockquote>"{{$beer->description}}"</blockquote>

                @if(Auth::check() && Auth::user()->isBasicUser()) <!-- only users -->
                    <!-- Add beer to favourite -->
                        <form method="post" action="{{route('switch', ['id' => $beer->id])}}" style="margin: 0">
                            @csrf
                            <input type="hidden" name="beer_id" value="{{ $beer->id}}" />
                            <input type="hidden" name="moduleAction" value="switch" />
                            @if($isFav)
                                <input type="submit" value="verwijder uit favorieten" class="btn"/>
                            @else
                                <input type="submit" value="voeg toe aan favorieten" class="btn"/>
                            @endif
                        </form>
                @elseif(Auth::check() && Auth::user()->isAdmin()) <!-- only admins -->
                    <!-- Edit beer -->
                        <form method="get" action="{{route('edit', ['id' => $beer->id])}}" style="margin: 0">
                            @csrf
                            <input type="hidden" name="beer_id" value="{{ $beer->id}}" />
                            <input type="hidden" name="moduleAction" value="edit" />
                            <input type="submit" value="Editeer bier" class="btn"/>
                        </form>
                        <!-- Delete beer -->
                        <form method="post" action="{{route('delete', ['id' => $beer->id])}}" style="margin: 0">
                            @csrf
                            <input type="hidden" name="beer_id" value="{{ $beer->id}}" />
                            <input type="hidden" name="moduleAction" value="delete" />
                            <input type="submit" value="Verwijder bier" class="btn"/>
                        </form>
                @endif

                @if(!Auth::check())
                    <h4>Tip!</h4>
                    <p><span><a href="{{route('login')}}">Log je in</a></span> om dit bier toe te voegen aan je favorieten.</p>
                @endif

                <a class="go-back" href="{{url($previous)}}">Ga terug</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    @else
        <div class="empty-content">
            <p>Dit bier werd niet gevonden.</p>
            <p>Ga terug naar <a href="{{route('index')}}">home</a>.</p>
        </div>
    @endif
@endsection