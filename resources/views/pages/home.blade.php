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
                <img src="{{ asset('assets/img/HuisOmgeving/huis/P1030790.JPG') }}" class="d-block w-100" alt="HauseMoltall">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hause Moltall</h5>
                    <p>Kom tot rust in de Oostenrijkse natuur!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/HuisOmgeving/zomer/P1030860.JPG') }}" class="d-block w-100" alt="Omgeving HauseMoltall">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a>Omgeving</a></h5>
                    <p>Geniet van al het moois wat Karinthië te bieden heeft</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/HuisOmgeving/wandelen/DSC05252.JPG') }}" class="d-block w-100" alt="Activiteiten HauseMoltall">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Activiteiten</h5>
                    <p>Genoeg te beleven in de buurt!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Vorige</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Volgende</span>
        </a>
    </div>
</div>

    <div>
        <div>
            <div>
                <div id="p7tpc1_1">
                    <h4>Korte informatie... </h4>
                    <p>Ons huis bestaat uit 2 apart te verhuren appartementen.</p>
                    <p>Het bovenste appartement bestaat uit:</p>
                    <p>- 2 Slaapkamers</p>
                    <p>- Woonkamer met ruime eethoek en zithoek </p>
                    <p>- Aparte keuken</p>
                    <p>- Badkamer en wc.</p>
                    <p>1 Slaapkamer is voorzien van een tweepersoonsbed. En de andere slaapkamer is voorzien van twee eenpersoonsbedden en een stapelbed.</p>
                    <p>Het balkon is te bereiken vanuit de kamer,keuken en 1 slaapkamer.</p>
                    <p>Het appartement beneden bestaat uit:</p>
                    <p>- Woonkamer met open keuken </p>
                    <p>- 2 slaapkamers</p>
                    <p>- badkamer en wc.</p>
                    <p>1 Slaapkamer is voorzien van een twee persoonsbed en een stapelbed. En de andere slaapkamer is voorzien van een tweepersoonsbed.</p>
                    <p>Er is nog een extra slaapkamer bij te huren voor 2 personen.</p>
                    <p>De grote tuin is voor beide appartementen te gebruiken. Er staat een trampoline en verder is er speelgoed aanwezig.</p>
                    <p>In de garage staan 2 damesfietsen en 3 mountainbikes.</p>
                    <p>Handdoeken/ linnengoed/ wasmachine/ strijkplank/ strijkijzer/ droogrek zijn aanwezig.</p>
                    <p>Tevens beschikken wij over 2 kinderbedjes, 1 kinderstoel en box.</p>
                    <p><b>Huisdieren en roken niet toegestaan.</b></p>
                </div>
            </div>
        </div>
    </div>
@endsection
