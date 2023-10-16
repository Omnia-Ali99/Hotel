
@extends('layouts.layout_1')
@section('content')
<div class="container-fluid home d-flex justify-content-center align-items-center " id="home">
<div class="card bg-transparent border-transparent mb-3  d-flex justify-content-center">
<h5 class="card-title text-center title">Book Your Vacation</h5>
  <div class="card-body ">
    <p class="card-text text-center body-card">Explore new experience with Hotale</p>
  </div> 
 
</div>

  </div>
@endsection

@section('content_1')
@include('includes.search')
@endsection

@section('content_2')
<section class="about" id="about">
<div class="card mb-3 border-0" >
  <div class="row g-0 " style="overflow: hidden; background-color: #f1f8ff;">
    <div class="col-md-8" style=" max-width: 1000px; height: 800px; margin-right: -14%;" >
      <img src="{{url('imgs/10.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-4 ">
      <div class="card-body card-about  ">
        <h5 class=" about-title"><div class="rounded-pill" style="  width: 45px; background-color: #FEA116; height: 5px;  margin: 12px;"> </div>About Us</h5>
        <p class="about-text">Welcome To Hotelia Modern Hotel Room Sells Services</p>
        <p class="about-bady"><small class="text-muted">
        But I must explain to you how all this mistaken idea denouncing pleasure and praising pain was born and I will give you a complec ount of the system, and expound the actual teachin reatexplorer of the truth, the master-builder of human happiness. No ways one rejdislikes, or avoids pleasure itself, because
        </small></p>
      </div>
    </div>
  </div>
</div>
</section>
@endsection

@section('content_3')
<section id="services" >
<div class="container-fluid " >
<div class="row " style="  padding: 0 160px 40px;">
  <div class="col-sm-4  ">
    <div class="card border-0 ">
      <div class="card-body">
      <i class="fa-solid fa-wifi fs-1 color"></i>
        <h5 class="card-title mt-3 fw-bolder fs-4">Free Wi-Fi</h5>
        <p class="card-text text-muted fs-5 " style="width: 80%;">The massive investment in a hotel or resort requires constant reviews and control in order to make it a successful investment.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card border-0">
      <div class="card-body">
      <i class="fa-solid fa-water-ladder  fs-1 color"></i>
        <h5 class="card-title  mt-3 fw-bolder fs-4">Premium Pool</h5>
        <p class="card-text  text-muted fs-5" style="width: 80%;">Choose from 4 unique ready made concepts, let us help you create the concept perfect for you or let HCA.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card border-0">
      <div class="card-body">
      <i class="fa-solid fa-mug-hot fs-1 color"></i>
        <h5 class="card-title  mt-3 fw-bolder fs-4">Coffee Maker</h5>
        <p class="card-text  text-muted fs-5 "style="width: 80%;">HCA's Owner's Representation is taking care of just these important factors, may it be through regular site visits and spot checks.</p>
      </div>
    </div>
  </div>
</div>
 
<div class="row " style="  padding: 0 160px 40px;">
  <div class="col-sm-4">
    <div class="card border-0">
      <div class="card-body">
      <i class="fa-solid fa-wine-glass fs-1 color"></i>
        <h5 class="card-title  mt-3 fw-bolder fs-4">Bar Wine</h5>
        <p class="card-text  text-muted fs-5 "style="width: 80%;">For properties with third party management companies, HCA Consultants will as well administer the terms and conditions.</p>
     
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card border-0">
      <div class="card-body">
      <i class="fa-solid fa-tv fs-1 color"></i>
        <h5 class="card-title  mt-3 fw-bolder fs-4">TV HD</h5>
        <p class="card-text  text-muted fs-5 "style="width: 80%;">We provide a critical analysis of a hotel's marketing strategy, bench-marking it against industry and competitive practices.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card border-0">
      <div class="card-body">
      <i class="fa-solid fa-utensils fs-1 color"></i>
        <h5 class="card-title mt-3 fw-bolder fs-4">Restaurant</h5>
        <p class="card-text  text-muted fs-5 "style="width: 80%;">A hotel and restaurant investment deserves careful and market oriented financial planning and projections.</p>
      </div>
    </div>
  </div>
</div>
 
</div>
</section>
@endsection

@section('content_4')
<section>
<div class="container-fluid bg-rooms" id="Rooms">
  <div class="text-center fs-4 fw-bolder mt-4 color">Featured rooms</div>
  <div class="text-center pt-3 fs-1 fw-bolder d-flex justify-content-center " style="width:35%; margin:auto;" >Modern Hotel & Room For Luxury Living</div>
  <div class="m-30">
  <div class="row row-cols-1 row-cols-md-3 g-4 ">
  <div class="col" style="margin-bottom: 40px;">
    <div class="card card-box">
      <img src="{{url('imgs/Rooms/1.jpg')}}" class="card-img-top card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title room-title">Single Rooms</h5>
        <h3 class="room-body"> 172.00$ / per night</h3>
      </div>
    </div>
  </div>
  <div class="col" style="margin-bottom: 40px;">
    <div class="card card-box">
      <img src="{{url('imgs/Rooms/5.jpg')}}" class="card-img-top card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title room-title">Rooms with a View</h5>
        <h3 class="room-body"> 523.00$ / per night</h3>
      </div>
    </div>
  </div>
  <div class="col" style="margin-bottom: 40px;">
    <div class="card card-box">
      <img src="{{url('imgs/Rooms/2.jpg')}}" class="card-img-top card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title room-title">Double rooms</h5>
        <h3 class="room-body"> 163.00$ / per night</h3>
      </div>
    </div>
  </div>
  
</div>
</div>
</div>
</section>
@endsection

@include('includes.Gallery')

@section('alert')
@if($alert=='t')
@include('includes.Alert')
@endif
@endsection

