<div class="d-flex justify-content-center ">
<div class="box ">
    <form name="search" action="{{ route('dashboard_user.store') }}" method="post">
    @csrf
        <select class=" select-search " onchange="this.form.submit()"  name="cityNumber" onmouseout="this.value = ''; this.blur();">
        <option selected>city</option>
        @isset ($cities)
        @foreach ($cities as $city)
        <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
				@endisset
</select>

    </form>

    <i class="fa-solid fa-magnifying-glass fa-xl i"></i>
</div>
</div>


