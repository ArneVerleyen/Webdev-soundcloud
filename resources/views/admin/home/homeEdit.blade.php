@extends('admin.admin_layout')
@section('admin_content')
<div class="margin-for-sidebar">
    <h3>
        @if (!$home)
        Nieuwe Homepage tekst
        @else
        Bewerk Homepagetekst
        @endif
    </h3>
    <form action="{{ route('home.save') }}" method="POST">
        @csrf

        @if($home)
        <input type="hidden" name="id" value="{{$home->language}}" >
        @endif
        <div class="medium-4 columns">
            <label for="">Title</label>
            <input name="title" type="text" value="{{ old('title', ($album ? $album->title: '')) }}" class='@error('title') invalid @enderror'>
        </div>
        <div class="medium-4 columns">
            <label for="">Artist</label>
            <input name="artist" type="text" value="{{ old('artist', ($album ? $album->artist: '')) }}" class='@error('artist') invalid @enderror'>
        </div>
        <div class="medium-4 columns">
            <label for="">Description</label>
            <textarea rows="10" name="description" type="text" class='@error('description') invalid @enderror'>{{ old('description', ($album ? $album->description: '')) }}</textarea>
        </div>
        <div class="medium-4 columns">
            <label for="">Beschrijving</label>
            <textarea class="larger-input" name="beschrijving" type="text" class='@error('beschrijving') invalid @enderror'>{{ old('beschrijving', ($album ? $album->beschrijving: '')) }}</textarea>
        </div>
        <div>
            <label for="">Released</label>
            <input name="released" type="text"  value="{{ old('released', ($album ? $album->released: '')) }}" class='@error('released') invalid @enderror' >
        </div>
        <div class="medium-4 columns">
            <label for="">Image URL</label>
            <input name="img_url" type="text" value="{{ old('img_url', ($album ? $album->img_url: '')) }}" class='@error('img_url') invalid @enderror'>
        </div>
        <div class="medium-12  columns">
            <input value="SAVE" class="button success hollow" type="submit">
        </div>
        <div class="medium-12 columns">
            @if($errors->any())
            <div class="callout error">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </form>

</div>
@endsection
