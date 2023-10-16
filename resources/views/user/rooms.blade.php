
@extends('layouts.layout_1')
@section('content')
<header class="bg-danger header-room" >
<div class="room">rooms</div>
</header>
@endsection
@section('content_1')
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">

   @isset ($rooms)
 
   @foreach ($rooms  as $room)
   <form  action="{{ route('booking',[$room->id,$room->name]) }}" method="get">
  @csrf
  <div class="col" style="margin-bottom: 40px;">
    <div class="card card-box">
      <img src="{{ url($room->url) }}" class="card-img-top card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title room-title">{{$room->name}}</h5>
        <h3 class="room-body">{{$room->pivot->price}}$ / per night</h3>
       
      </div>
      <button type="sudmit" class="btn btn-secondary btn-lg button-room">book now</button>

    </div>
  </div>
  </form> 
   @endforeach
 
@endisset
</div>
</div>
@endsection
@section('content_2')
 

@endsection