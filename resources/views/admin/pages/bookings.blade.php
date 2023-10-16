@extends('admin.dashboard')

@section('content')
<div class="content-bookings ">
<table class="table  text-white text-center ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">arrival_date</th>
      <th scope="col">departure_date</th>
      <th scope="col">payment_mode</th>
      <th scope="col"></th>



    </tr>
  </thead>
  @isset ($bookings)

  <tbody>

     @foreach ($bookings as $booking)

    <tr>
      <th scope="row">{{ $booking->id }}</th>
      <td>{{ $booking->user->name }}</td>
      <td>{{ $booking->arrival_date }}</td>
      <td>{{ $booking->departure_date }}</td>
      <td>{{ $booking->bill->payment_mode }}</td>
      <td>
       <a  type="button" class="icon-admin" > <i class="fa-regular fa-eye" ></i></a>
       <a  type="button"data-bs-toggle="modal" data-bs-target="#delete" class="icon-trash"> <i class="fa-regular fa-trash-can"></i></a>
      </td>

    </tr>
    @include('admin.includes.modal-delete')

    @endforeach
             

  </tbody>
</table>
<div class="d-flex justify-content-center mt-20 links">
            {{$bookings->onEachSide(1)->links()}}
        </div>
</div>
@endisset
@endsection



