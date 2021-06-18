@section('title')
    Home
@endsection

@extends('layouts.app')

@section('content')
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/HuisOmgeving/huis/huis2.JPG') }}" class="d-block w-100"
                         alt="HauseMoltall">
                    <div class="carousel-caption d-none d-md-block" style="background-color:rgba(0,0,0,0.4);">
                        <h5>Hause Moltall</h5>
                        <p>Kom tot rust in de Oostenrijkse natuur!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/HuisOmgeving/zomer/zomer1.JPG') }}" class="d-block w-100"
                         alt="Omgeving HauseMoltall">
                    <div class="carousel-caption d-none d-md-block" style="background-color:rgba(0,0,0,0.4);">
                        <h5><a>Omgeving</a></h5>
                        <p>Geniet van al het moois wat Karinthië te bieden heeft</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/HuisOmgeving/wandelen/wandelen6.JPG') }}" class="d-block w-100"
                         alt="Activiteiten HauseMoltall">
                    <div class="carousel-caption d-none d-md-block" style="background-color:rgba(0,0,0,0.4);">
                        <h5>Activiteiten</h5>
                        <p>Genoeg te beleven in de buurt!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


@endsection
