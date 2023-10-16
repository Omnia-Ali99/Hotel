
@extends('layouts.layout_1')
@section('content')
<header class="bg-danger header-hotel" >

</header>
@endsection

@section('content_2')

<div class="container mt-5" >
<h5 class=" border-bottom  about-title"><div class="rounded-pill" style="  width: 45px; background-color: #FEA116; height: 5px;  margin: 12px;"> </div>Hotels</h5>


    <div class="row g-4  row-cols-1 row-cols-lg-3  mt-3">
    @isset ($hotels)
    @foreach ($hotels as $hotel)
    <form  action="{{ route('dashboard_user.show',$hotel->id) }}" method="GET">
    @csrf
      <div class=" card-hotel col p-4 d-flex align-items-start  flex-column bd-highlight " >
         <span class="border-0 icon-hotel mb-2"> <i class=" fa-solid fa-hotel fs-1 me-2" ></i> </span>
          <h2 class="d-flex justify-content-center mb-2 fs-5  fw-bold" >{{$hotel->name}}</h2>
          
          <a href="#" class="text-decoration-none text-muted" ><i class="fa-solid fa-phone"></i>  {{$hotel->mobile}}</a>
          <a href="#" class="text-decoration-none text-muted" ><i class="fa-sharp fa-solid fa-envelope"></i> {{$hotel->email}} </a>
          <a href="#" class="text-decoration-none text-muted" ><i class="fa-solid fa-location-dot"></i> {{$hotel->address}} </a>
           
     
          <div class="d-grid gap-2 col-6 mx-auto ">
         <button  class="btn  fs-6 text-secondary fw-bolder " type="submit"><i class="fa-regular fa-eye m-2"> </i>Rooms<i class="fa-solid fa-arrow-right ms-2"></i></button>
        </div>

      </div>
    </form>
      @endforeach
      @endisset
  
    </div>
  </div>

 
@endsection
