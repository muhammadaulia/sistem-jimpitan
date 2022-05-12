<style>
  .navbar{
    z-index: 2;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.youtube.com/watch?v=kTJczUoc26U&ab_channel=TheKidLAROIVEVO"><i class="bi bi-cash-coin"></i> Dayu Jimpitan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          {{-- Jika title halaman sama dengan title di web.php, maka beri highlight di tombol --}}
          <a class="nav-link {{ ($title === 'Dayu Jimpitan | Halaman Home') ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Dayu Jimpitan | User Profile') ? 'active' : '' }}" href="/profile">Registered User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Dayu Jimpitan | Halaman FAQ') ? 'active' : '' }}" href="/faq">FAQ</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">

        {{-- Penerapan fitur milik user (login dan logout)--}}
        @auth

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{-- Mengambil nama user yang sedang login --}}
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <form action="/logout" method="POST">
                @csrf

                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>

        @else
        
        <li class="nav-item">
          <a class="nav-link" href="/login">
            <i class="bi bi-box-arrow-in-right"></i> Login
          </a>
        </li>

        @endauth
      </ul>
    </div>
  </div>
</nav>