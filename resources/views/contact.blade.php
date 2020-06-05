@extends('layout')

@section('content')
<form class="form-contact" action="" method="POST">
    @csrf
    <h3 class="page-title">{{__('contact-us')}}</h3>
    <input type="text" name="name" id="name" placeholder="{{__('name')}}">
    <input type="email" name="email" id="email" placeholder="{{__('email')}}">
    <input type="text" name="subject" id="subject" placeholder="{{__('subject')}}">
    <textarea name="content" id="content" cols="30" rows="10" placeholder="{{__('message')}}"></textarea>
    <button class="mail-btn" type="submit">{{__('send')}}</button>
</form>
@endsection
