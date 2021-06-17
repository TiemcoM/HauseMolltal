@section('title')
    Gallerij
@endsection

@extends('layouts.app')

@section('content')

    <!-- <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            console.log( "ready!" );

            var getAllImages = document.getElementsByTagName('img');
            console.log(getAllImages)
            for (var i = 0; i < getAllImages.length; i++) {
                (function(x) {
                    getAllImages[x].addEventListener('click', function() {

                        alert(this.getAttribute('src'))
                    })
                }(i))
            }
        });
    </script> -->

    <nav>
        <div class="nav nav-tabs mt-4" id="nav-tab" role="tablist">

            <a class="nav-item nav-link active" id="nav-huistuin-tab" data-toggle="tab" href="#nav-huistuin" role="tab"
               aria-controls="nav-home" aria-selected="true">Huis&Tuin</a>

            <a class="nav-item nav-link" id="nav-benedenkamer-tab" data-toggle="tab" href="#nav-benedenkamer" role="tab"
               aria-controls="nav-profile" aria-selected="false">Beneden Kamers</a>

            <a class="nav-item nav-link" id="nav-bovenkamer-tab" data-toggle="tab" href="#nav-bovenkamer" role="tab"
               aria-controls="nav-contact" aria-selected="false">Boven Kamers</a>

            <a class="nav-item nav-link" id="nav-activiteiten-tab" data-toggle="tab" href="#nav-activiteiten" role="tab"
               aria-controls="nav-contact" aria-selected="false">activiteiten & Omgeving</a>

        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade show active" id="nav-huistuin" role="tabpanel" aria-labelledby="nav-huistuin-tab">

            @include('pages.Gallery.huisTuin')

        </div>

        <div class="tab-pane fade" id="nav-benedenkamer" role="tabpanel" aria-labelledby="nav-benedenkamer-tab">

            @include('pages.Gallery.benedenKamer')

        </div>

        <div class="tab-pane fade" id="nav-bovenkamer" role="tabpanel" aria-labelledby="nav-benedenkamer-tab">

            @include('pages.Gallery.bovenKamer')

        </div>


        <div class="tab-pane fade" id="nav-activiteiten" role="tabpanel" aria-labelledby="nav-activiteiten-tab">

            @include('pages.Gallery.activiteitenOmgeving')

        </div>

    </div>

@endsection
