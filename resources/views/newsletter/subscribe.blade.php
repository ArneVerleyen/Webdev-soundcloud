@extends('layout')

@section('content')
<div class="d-flex align-items-center align-center">
    @if (session('succes'))
        <div class="alert alert-succes" role="alert">
            {{session('succes')}}
        </div>
    @endif
    @if (session('failure'))
    <div class="alert alert-danger" role="alert">
        {{session('failure')}}
    </div>
@endif
   <form action="{{route('subscribe.post', app()->getLocale())}}" method="POST">
       @csrf
       <label for="">E-mail adres</label>
       <input type="email" name="email">
       <button type="submit">Subscribe</button>
   </form>
</div>
@endsection
