@extends('mainLayout.main')

@section('content')

  <div>
    <h1>Welcome to your own dashboard page, you are <u>{{ auth()->user()->name }}</u> 
    </h1>
  </div>

@endsection