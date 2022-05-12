{{-- Main layout --}}
@extends('mainLayout.main')

{{-- CSS --}}
<link rel="stylesheet" href="css/Register/style.css">

@section('content')

<div class="container-fluid">

  <div class="row justify-content-center">
    <div class="col-lg-4">
  
      <main class="form-registration">
        
        <img class="my-3 rounded mx-auto d-block" src="/img/aes.png" alt="aes" width="300" height="200">
  
        <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
        
        <form action="/register" method="POST">
          {{-- Cross Site Request Forgery --}}
          @csrf

          <div class="form-floating">
            {{-- Dokumentasi @error @enderror, is-invalid, dan invalid-feedback--}}
            {{-- https://laravel.com/docs/9.x/validation --}}
            {{-- https://getbootstrap.com/docs/5.0/forms/validation/ --}}

            {{-- value="{{ old('') }}" => untuk tetap menampilkan hasil inputan ketika terdapat sebuah inputan yang tidak lolos--}}
            
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
            <label for="name">Name</label>
            @error('name')
                <div class="invalid-feedback">
                  {{-- Menampilkan pesan error --}}
                  {{ $message }}
                </div>
            @enderror
          </div>
  
          <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}">
            <label for="username">Username</label>
            @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
  
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
            <label for="floatingInput">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
          
          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password">
            <label for="password">Password</label>
            @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
      
          <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        </form>
  
      </main>
  
      <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login Now</a></small>
  
    </div>
  </div>

</div>
@endsection