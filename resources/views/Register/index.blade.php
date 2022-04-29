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
        
        <form>
          
          <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
            <label for="name">Name</label>
          </div>
  
          <div class="form-floating">
            <input type="text" name="username" class="form-control" id="username" placeholder="Usernam">
            <label for="username">Username</label>
          </div>
  
          <div class="form-floating">
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          
          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
            <label for="password">Password</label>
          </div>
      
          <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        </form>
  
      </main>
  
      <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login Now</a></small>
  
    </div>
  </div>

</div>
@endsection