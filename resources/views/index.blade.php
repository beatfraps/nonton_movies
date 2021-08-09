@extends('layouts.nav')
@section('content')
    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="30000">
                <div class="bg-image-mask">
                    <img src="{{$slide[0]}}" class="d-block w-100" alt="{{$slide_name[0]}}">
                    <div class="mask" style="background-color: rgba(0,0,0,0.75)">
                        <div class="carousel-caption d-none d-md-block">
                            <img src="{{$slide_poster[0]}}" class="center-bloc" id="poster" alt="{{$slide_name[0]}}">
                            <h1>{{$slide_name[0]}}</h1>
                            <h3>{{$slide_desc[0]}}</h3>
                            <button type="button" class="btn btn-info btn-lg">Nonton Trailer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-interval="2000">
                <div class="bg-image-mask">
                    <img src="{{$slide[1]}}" class="d-block w-100" alt="{{$slide_name[1]}}">
                    <div class="mask" style="background-color: rgba(0,0,0,0.75)">
                        <div class="carousel-caption d-none d-md-block">
                            <img src="{{$slide_poster[1]}}" class="center-bloc" id="poster" alt="{{$slide_name[1]}}">
                            <h1>{{$slide_name[1]}}</h1>
                            <h3>{{$slide_desc[1]}}</h3>
                            <button type="button" class="btn btn-info btn-lg">Nonton Trailer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="bg-image-mask">
                    <img src="{{$slide[2]}}" class="d-block w-100" alt="{{$slide_name[2]}}">
                    <div class="mask" style="background-color: rgba(0,0,0,0.75)">
                        <div class="carousel-caption d-none d-md-block">
                            <img src="{{$slide_poster[2]}}" class="center-bloc" id="poster" alt="{{$slide_name[2]}}">
                            <h1>{{$slide_name[2]}}</h1>
                            <h3>{{$slide_desc[2]}}</h3>
                            <button type="button" class="btn btn-info btn-lg">Nonton Trailer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row justify-content-center">
        @for( $i = 0 ; $i < count($images) ; $i++)
                <div class="movie_card">
                    <div class="info_section">
                        <div class="movie_header">
                            <img class="locandina" src="{{ $images[$i] }}"/>
                            <h1 class="title">{{ $name[$i] }}</h1>
                            <h3>{{$movie[$i]->year}}</h3>
                            <span class="minutes">{{$vote_average[$i]}}</span>
                            <p class="type">
                                @for($j = 0 ; $j < count($movie[$i]->genres) ; $j++)
                                    @foreach($genres as $item)
                                        @if($item->id == $movie[$i]->genres[$j]->genre_id)
                                            {{$item->name}}
                                            @if($j != count($movie[$i]->genres) -1)
                                                ,
                                            @endif
                                        @endif
                                    @endforeach
                                @endfor
                            </p>
                        </div>
                        <div class="movie_desc">
                            <p class="text">
                                {{$overview[$i]}}
                            </p>
                        </div>
                        <div class="movie_social">
                            <button type="button" class="btn btn-light btn-lg">Trailer</button>
                            <button type="button" class="btn btn-info btn-lg">Nonton Sekarang !</button>
                        </div>
                    </div>
                    <div class="blur_back" style="background-image: url('{{ $backdrop[$i] }}');"></div>
                </div>
        @endfor
        <div>
            {{ $movie->links('pagination') }}
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.carousel').carousel()
    </script>
@endsection
