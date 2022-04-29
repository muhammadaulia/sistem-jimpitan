{{-- Main layout --}}
@extends('mainLayout.main')

{{-- CSS --}}
<link rel="stylesheet" href="css/userProfile/style.css">

@section('content')

@foreach ($foto as $user)

<div class="justify-content-center">
  
  <div class="container-fluid">
    <img src="img/{{ $user["image"] }}" class="image-fluid rounded mx-auto d-block" alt="{{ $user["name"] }}">
  </div>

  <section class="py-2 text-center container">
    <div class="row py-lg-2">

      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">{{ $user["name"] }}</h1>
        <ul class="list-group">
          <li class="list-group-item">Email:</li>
          <li class="list-group-item">Username: {{ $user["name"] }}</li>
          <li class="list-group-item">Account Created At:</li>
        </ul>
        </p>
      </div>
    </div>
  </section>

</div>

@endforeach

@endsection