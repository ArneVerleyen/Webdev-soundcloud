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
        <input type="hidden" name="id" value="{{$home->id}}">
        @endif
        <div class="medium-4 columns">
            <label for="">Header</label>
            <input name="header" type="text" value="{{ old('header', ($home ? $home->header: '')) }}" class='@error('header') invalid @enderror'>
        </div>
        <div class="medium-4 columns">
            <label for="">Title above albums</label>
            <input name="titel_albums" type="text" value="{{ old('titel_albums', ($home ? $home->titel_albums: '')) }}" class='@error('titel_albums') invalid @enderror'>
        </div>
        <div class="medium-4 columns">
            <label for="">Description Soundcloud</label>
            <textarea rows="10" name="uitleg" type="text" class='@error('uitleg') invalid @enderror'>{{ old('uitleg', ($home ? $home->uitleg: '')) }}</textarea>
        </div>
        <div class="medium-4 columns">
            <label for="">Subscribe</label>
            <input class="larger-input" name="abonneer" type="text" class='@error('abonneer') invalid @enderror' value="{{ old('abonneer', ($home ? $home->abonneer: '')) }}">
        </div>
        <div>
            <label for="">Subscribe button</label>
            <input name="abonneer_btn" type="text"  value="{{ old('abonneer_btn', ($home ? $home->abonneer_btn: '')) }}" class='@error('abonneer_btn') invalid @enderror' >
        </div>
        <div class="medium-4 columns">
            <label for="">Donate</label>
            <input name="doneer" type="text" value="{{ old('doneer', ($home ? $home->doneer: '')) }}" class='@error('doneer') invalid @enderror'>
        </div>
        <div class="medium-4 columns">
            <label for="">Donate button</label>
            <input name="doneer_btn" type="text" value="{{ old('doneer_btn', ($home ? $home->doneer_btn: '')) }}" class='@error('doneer_btn') invalid @enderror'>
        </div>
        <div class="medium-4 columns">
            <label for="">Language</label>
            <input name="language" type="text" value="{{ old('language', ($home ? $home->language: '')) }}" class='@error('language') invalid @enderror'>
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
