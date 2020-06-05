@extends('layout')

@section('content')
<div class="container-album-detail row">
    <div class='col-sm-12  col-lg-3'>
    <img src="{{ $album->img_url }}" alt="{{$album->title}}">
    </div>
    <div class="col-sm-12 col-lg-8">
        <h3>{{$album->title}}</h3>
        <p>{{$album->artist}}</p>
        <p>{{$album->description}}</p>
    </div>


</div>
@endsection
