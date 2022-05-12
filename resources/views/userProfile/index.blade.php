{{-- Main layout --}}
@extends('mainLayout.main')

{{-- CSS --}}
<link rel="stylesheet" href="css/userProfile/style.css">

@section('content')


<div class="container">
  <div class="row">

    @foreach ($user as $member)
    
    {{-- Grid bootstrap --}}
      <div class="col-md-3">

        <div class="card-deck">
          <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Name:</h5>
              <p class="card-text">
                {{ $member["name"] }}
              </p>
              <p class="card-text">
                <small class="text-muted">
                  Username: {{ $member["username"] }}
                </small>
              </p>
              <p class="card-text">
                <small class="text-muted">
                  Registered: {{ $member["created_at"]->diffForHumans() }}
                </small>
              </p>
            </div>
          </div>
        </div>

      </div>
    @endforeach

  </div>
</div>

@endsection