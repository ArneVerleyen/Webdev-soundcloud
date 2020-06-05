@extends('layout')

@section('content')

<div class="row">
    @foreach($albums as $album)
    <div class="margin-albums">
        <div class="col-sm-12 col-md-4 col-lg-3 outer-card">
            <div class="card nopadding album-list-item">
                <img class="card-img-top" src="{{$album->img_url}}">
                <div class="card-body">
                    <h3 class="card-title">{{$album->title}}</h3>
                    <p class="card-artist">{{$album->artist}}</p>
                    <a class="card-link" href="{{route('albums.show',['language' => app()->getLocale(), 'id' => $album->id]) }}">{{__('read')}}</a>
                </div>
            </div>
        </div>


    </div>
    @endforeach
</div>
<div class="pagination-container row">
    <div class="col-12 pagination">{{$albums->links()}}</div>
</div>
@endsection
