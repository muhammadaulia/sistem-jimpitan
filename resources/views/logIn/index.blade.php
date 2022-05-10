{{-- Main layout --}}
@extends('mainLayout.main')

{{-- CSS --}}
<link rel="stylesheet" href="css/style.css">


@section('content')

<div class="container-fluid">

  <div class="row justify-content-center">
    <div class="col-lg-3">
  
      {{-- Flash message --}}
      @if (session()->has('success'))
          
      <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
          {{ session('success') }}
        </div>
      </div>

      @endif

      <main class="form-signin">

        <img class="my-3 rounded mx-auto d-block" src="/img/nature.jpg" alt="nature" width="300" height="200">

        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

        <form>
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
      
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
  
      </main>
  
      <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now</a></small>
    </div>
  </div>

</div>

@endsection