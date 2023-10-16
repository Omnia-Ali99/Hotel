@extends('admin.dashboard')

@section('content')
<div class="content-bookings">
<table class="table  text-white text-center">
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
  @isset ($RecycleBin)

  <tbody>

     @foreach ($RecycleBin as $recycle)

    <tr>
      <th scope="row">{{ $recycle->id }}</th>
      <td>{{ $recycle->user->name }}</td>
      <td>{{ $recycle->arrival_date }}</td>
      <td>{{ $recycle->departure_date }}</td>
      <td>{{ $recycle->bill->payment_mode }}</td>
      <td>
      <a href="{{ route('recycle',$recycle->id)}}" class="icon-admin" > <i class="fa-solid fa-arrow-rotate-right"></i></a>

      </td>
    </tr>

    @endforeach
             

  </tbody>
</table>
<div class="d-flex justify-content-center mt-20  links">
            {{$RecycleBin->onEachSide(1)->links()}}
        </div>
</div>
@endisset
@endsection



