@extends('layout')

@section('content')
<div class="page-header">
    <div>
        <h3>{{ $home->header }}</h3>
    </div>
</div>
<div>
    <h3 class='page-title'>
        {{ $home->title_albums }}
    </h3>
    <div class="row">
        <div class="card col-sm-12 col-md-3 nopadding">
            <img class="card-img-top" src="{{asset('images/albumCover.jpg')}}">
            <div class="card-body">
                <h3 class="card-title">Santana Abraxas</h3>
                <p class="card-text">nieuw album van Carlos</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 nopadding">
            <img class="card-img-top" src="{{asset('images/albumCover.jpg')}}">
            <div class="card-body">
                <h3 class="card-title">Santana Abraxas</h3>
                <p class="card-text">nieuw album van Carlos</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 nopadding">
            <img class="card-img-top" src="{{asset('images/albumCover.jpg')}}">
            <div class="card-body">
                <h3 class="card-title">Santana Abraxas</h3>
                <p class="card-text">nieuw album van Carlos</p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around body-content">
        <div class="logo-oranje col-2">
            <img src="{{asset('images/logo-oranje.png')}}">
        </div>
        <p class="body-text-right col-6">
            {{ $home->uitleg }}
        </p>

    </div>
    <div class="body-content-center">
        <p class="body-text">
            {{ $home->abonneer }}
        </p>
        <button class="orange-btn">
            <p>{{ $home->abonneer_btn }}</p>
        </button>
    </div>
    <div class="body-content-center">
        <p class="body-text">
            {{ $home->doneer }}
        </p>
        <button class="orange-btn">
            <p>{{ $home->doneer_btn }}</p>
        </button>
    </div>
</div>
@endsection
