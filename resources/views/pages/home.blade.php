@section('title')
Home
@endsection

@extends('layouts.app')

@section('content')
    <div class="p-5 text-center bg-image"
         style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.jpg');
      height: 400px;
      margin-top: 58px;
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
@endsection
