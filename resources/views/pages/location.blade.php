@section('title')
    Locatie
@endsection

@extends('layouts.app')

@section('content')
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe  width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Untersagritz%2012,%209843%20Untersagritz,%20Oostenrijk&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
    @endsection
