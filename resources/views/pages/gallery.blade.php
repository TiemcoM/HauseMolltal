@section('title')
    Gallerij
@endsection

@extends('layouts.app')

@section('content')

    <nav>
        <div class="nav nav-tabs mt-4" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Huis&Tuin</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Beneden kamers</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="row mb-4">
                <div class="col-lg-4 col-md-12  mb-lg-0 mt-4">
                    <img
                        src="{{ asset('assets/img/HuisOmgeving/huis/entree1.jpg') }}"
                        class="w-100 mb-4 h-100 shadow-1-strong rounded  "
                        alt=""
                    />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0 mt-4">
                    <img
                        src="{{ asset('assets/img/HuisOmgeving/huis/huis3.jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 "
                        alt=""
                    />

                    <img
                        src="{{ asset('assets/img/HuisOmgeving/huis/huis4.jpg') }}"
                        class="w-100 shadow-1-strong rounded "
                        alt=""
                    />

                </div>

                <div class="col-lg-4  mt-0 mt-lg-4">
                    <img
                        src="{{ asset('assets/img/HuisOmgeving/huis/entree2.jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4 "
                        alt=""
                    />

                    <img
                        src="{{ asset('assets/img/HuisOmgeving/huis/huis6.jpg') }}"
                        class="w-100 shadow-1-strong rounded "
                        alt=""
                    />

                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <img
                        src="{{ asset('assets/img/tuin/tuin1.jpg') }}"
                        class="w-100 shadow-1-strong rounded "
                        alt=""
                    />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0 ">
                    <img
                        src="{{ asset('assets/img/HuisOmgeving/huis/huis2.jpg') }}"
                        class="w-100 shadow-1-strong rounded "
                        alt=""
                    />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0 ">
                    <img
                        src="{{ asset('assets/img/HuisOmgeving/huis/huis7.jpg') }}"
                        class="w-100 shadow-1-strong rounded "
                        alt=""
                    />
                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

            <div class="row mt-4">
                <div class="col-lg-8 col-md-12 mb-8 mb-lg-0">
                    <img
                        src="{{ asset('assets/img/Beneden/appartement (2).jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                        src="{{ asset('assets/img/Beneden/appartement (3).jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />

                    <img
                        src="{{ asset('assets/img/Beneden/appartement (4).jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img
                        src="{{ asset('assets/img/Beneden/appartement.jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />
                </div>

                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img
                        src="{{ asset('assets/img/Beneden/appartement beneden.jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                        src="{{ asset('assets/img/Beneden/2 pers slaapkamer.jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />
                </div>

                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img
                        src="{{ asset('assets/img/Beneden/2 pers slaapkamer (2).jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                        src="{{ asset('assets/img/Beneden/2 pers slaapkamer (3).jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />
                </div>

                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img
                        src="{{ asset('assets/img/Beneden/2 pers slaapkamer (2).jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12 mb-8 mb-lg-0">
                    <img
                        src="{{ asset('assets/img/Beneden/4 pers slaapkamer (3).jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                        src="{{ asset('assets/img/Beneden/4 pers slaapkamer (2).jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />

                    <img
                        src="{{ asset('assets/img/Beneden/4 pers slaapkamer.jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img
                        src="{{ asset('assets/img/Beneden/badkamer.jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                        src="{{ asset('assets/img/Beneden/badkamer (2).jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                        src="{{ asset('assets/img/Beneden/badkamer (3).jpg') }}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt=""
                    />
                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">


        </div>

    </div>

@endsection
