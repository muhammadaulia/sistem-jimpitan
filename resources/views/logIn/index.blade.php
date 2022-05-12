{{-- Main layout --}}
@extends('mainLayout.main')

{{-- CSS --}}
<link rel="stylesheet" href="css/style.css">


@section('content')

<div class="container-fluid">

  <div class="row justify-content-center">
    <div class="col-lg-3">
  
      {{-- Flash message --}}
      {{-- Jika berhasil tampilkan pesan flash ini --}}
      @if (session()->has('success'))
          
      <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
          {{ session('success') }}
        </div>
      </div>

      @endif

      {{-- Jika gagal tampilkan pesan flash ini --}}
      @if (session()->has('loginFailed'))
          
      <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
          {{ session('loginFailed') }}
        </div>
      </div>

      @endif

      <main class="form-signin">

        <img class="my-3 rounded mx-auto d-block" src="/img/nature.jpg" alt="nature" width="300" height="200">

        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

        <form action="/login" method="POST">
          {{-- Cross Site Request Forgery --}}
          @csrf

          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com"  value="{{ old('email') }}" autofocus required>
            <label for="email">Email address</label>
          </div>

          <div class="form-floating">
            <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password"  required>
            <label for="password">Password</label>
          </div>
      
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
  
      </main>
  
      <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now</a></small>
    </div>
  </div>

</div>

@endsection