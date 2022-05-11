{{-- Main layout --}}
@extends('mainLayout.main')

{{-- CSS --}}
<link rel="stylesheet" href="css/userProfile/style.css">

@section('content')


<div class="container d-flex justify-content-start">

  <div class="container-fluid mt-3">
    <img src="/img/txtyeonjun.jpg" class="rounded float-start" alt="yeonjun">
    
    <div class="container">
      <div class="row py-md-3">

        @if ($user->count())
            
        <div class="col-md-6 col-md-8 mx-auto">
          <h1 class="fw-light">{{ $user[3]->name }}</h1>
          <ul class="list-group">
            <li class="list-group-item">Email: {{ $user[3]->email }}</li>
            <li class="list-group-item">Username: {{ $user[3]->username }}</li>
            <li class="list-group-item">Account Created At: {{ $user[3]->created_at->diffForHumans()}}</li>
          </ul>
        </div>
      
        @endif
            
      </div>
    </div>

  </div>



</div>

@endsection