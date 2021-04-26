@section('title')
Home
@endsection

@extends('layouts.app')

@section('content')
    <div class="p-5 text-center bg-image img-responsive"
         style="
      background-image: url('http://www.hause-molltal.nl/foto%20huis%201.JPG');
      height: 400px;
      margin-top: 58px;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    ">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Hause Molltal</h1>
                    <h4 class="mb-3">Mooi huissie</h4>
                    <a class="btn btn-outline-light btn-lg" href="{{ route('gallery') }}" role="button">Meer afbeeldingen</a>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div>
            <div>

            </div>
        </div>
    </div>
@endsection
