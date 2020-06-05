@extends('layout')

@section('content')
<div class="d-flex justify-content-around body-content">
    <div class="logo-oranje col-2">
        <img src="{{asset('images/logo-oranje.png')}}">
    </div>
    <p class="body-text-right col-6">
        {{$about->text}}
    </p>
</div>
@endsection
