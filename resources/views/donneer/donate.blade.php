@extends('layout')

@section('content')
<div class="donate-container">
    <form method="get" action="{{ route('makePayment', app()->getLocale()) }}" class="donate-form">

        <div class="d-flex align-items-center">
            <div>
                <label>Hoeveel</label>
                <input type="number" value="0.00" name="amount" id="amount">
            </div>
            <div>
                <label>in welke valuta</label>
                <select class="form-control" name="currency" value="EUR" id="currency">
                    <option>EUR</option>
                    <option>$</option>
                </select>
            </div>
        </div>
        <input class="input-donate" type="text" name="message" >
        <button class="button-donate" type="submit">Doneer</button>
    </form>


</div>
@endsection
