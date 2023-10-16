@extends('layouts.layout_1')
@section('content')
<div class="container-fluid container-booking">
    <div style=" width: 80%; margin: 80px;">
    <div class="container overflow-hidden ">
  <div class="row g-0 ">
    <div class="col-sm-19 col-md-7 ">
     <div class="  bg-light border rounded-start">
       <img  src="{{url('imgs/70.jpg')}}"/>
     </div>
    </div>
    <div class="col-md-5 col-sm-16 ">
      <div class="p-3 border bg-light rounded-end" style="height: 100%;">
      <h3 class="mb-3 p-3 text-center fs-4 text-uppercase" style="color: #FEA116 ;">Make Your Reservation</h3>

      <form  action="{{ route('booking_store') }}" method="post">
      @csrf
  <fieldset disabled>
  <div class="container overflow-hidden">
  <div class="row gx-3">
    <div class="col">
    <div class="form-floating">
    @isset($city)
      <input type="text" class="form-control" id="city" name="city"  value="{{$city->name}}">
      <label for="city">City</label>
      @endisset
    </div>
    </div>
    <div class="col">
    <div class="form-floating">
    @isset ($Hotel_name)
      <input type="text" class="form-control" name="Hotel" id="Hotel" value="{{$Hotel_name}}">
      @endisset
      <label for="Hotel">Hotel</label>
    </div> 
  </div>
  </div>
  <div class="form-floating mt-4">
   @isset ($name)
      <input type="text" class="form-control" id="room-type" name="room_type" value="{{$name}}">
    @endisset
      <label for="room-type">Room type</label>
    </div>
</div>
  </fieldset>

  <div class="container overflow-hidden">
  <div class="row gx-3">
    <div class="col">
    <div class="form-floating mt-4">
      <input type="date" class="form-control " id="Arrival_date" name="Arrival_date"  required >
      <label for="Arrival-date" >Arrival date</label>
    </div>
    </div>
    <div class="col">
    <div class="form-floating mt-4">
      <input type="date" class="form-control" id="Departure-Date" name="Departure_Date" required>
      <label for="Departure-Date">Departure Date</label>
    </div>
    </div>
  </div>
  <select class="form-select form-select-lg mb-3 mt-4 fs-6" aria-label=".form-select-lg example"  name="bill"  required >
  <option selected disabled value="">Payment mode</option>
  @isset ($bills)
  @foreach ($bills  as $bill)
  <option  value="{{ $bill->id }}">{{ $bill->payment_mode}}</option>
    @endforeach
    @endisset
  </select>
<div class="d-grid mt-9 ">
  <button class="btn btn-secondary btn-lg fs-4 text-uppercase fw-bold" type="submit" >Book now</button>
</div>
</div>
</form>
   </div>
    </div>
  </div>
</div>

    </div>
 
</div>
@endsection

