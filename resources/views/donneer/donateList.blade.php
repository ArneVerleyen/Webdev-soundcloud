@extends('layout')

@section('content')
<div class="row donations-list-header">
    <p class="col-4">Amount donated:</p>
    <p class="col-4">Message:</p>
</div>
@foreach ($donations as $donation)
<div class="row donations-list-item">
    <p class="col-4">{{$donation->amount}} {{$donation->currency}}</p>
    <p class="col-4">{{$donation->message}}</p>
</div>
<div class="pagination-container row">
    <div class="col-12 pagination">{{$donations->links()}}</div>
</div>
@endforeach
@endsection
