@extends('mainLayout.main')

{{-- CSS --}}
<link rel="stylesheet" href="css/Dashboard/style.css">

@section('content')

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#myChart">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tabelLaporan">
              <span data-feather="file"></span>
              Tabel
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li> --}}
        </ul>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard Utama</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      {{-- Penggunaan Library ChartJs --}}
      <div>
        <canvas class="my-5 w-100" id="myChart" width="900" height="380">
          <script>
            const labels = [
              'Januari',
              'Februari',
              'Maret',
              'April',
              'Mei',
              'Juni',
              'Juli',
              'Agustus',
              'September',
              'Oktober',
              'November',
              'Desember',
            ];
          
            const data = {
              labels: labels,
              datasets: [{
                label: 'Jumlah Jimpitan',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45],
              }]
            };
          
            const config = {
              type: 'line',
              data: data,
              options: {}
            };
          
            const myChart = new Chart(
              document.getElementById('myChart'),
              config
            );
          </script>
        </canvas>
      </div>

      <div class="judulTabel">
        <h2 id="tabelLaporan">Tabel Laporan</h2>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Bulan</th>
              <th scope="col">Minggu Ke-1</th>
              <th scope="col">Minggu Ke-2</th>
              <th scope="col">Minggu Ke-3</th>
              <th scope="col">Minggu Ke-4</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Januari</td>
              <td>Rp 1.000.000,00</td>
              <td>Rp 4.000.000,00</td>
              <td>Rp 6.000.000,00</td>
              <td>Rp 2.000.000,00</td>
            </tr>
            <tr>
              <td>Februari</td>
              <td>Rp 1.000.000,00</td>
              <td>Rp 3.000.000,00</td>
              <td>Rp 2.000.000,00</td>
              <td>Rp 6.000.000,00</td>
            </tr>
            <tr>
              <td>Maret</td>
              <td>Rp 1.000.000,00</td>
              <td>Rp 4.000.000,00</td>
              <td>Rp 5.000.000,00</td>
              <td>Rp 2.000.000,00</td>
            </tr>
            <tr>
              <td>April</td>
              <td>Rp 1.000.000,00</td>
              <td>Rp 2.000.000,00</td>
              <td>Rp 3.000.000,00</td>
              <td>Rp 4.000.000,00</td>
            </tr>
            <tr>
              <td>Mei</td>
              <td>Rp 1.000.000,00</td>
              <td>Rp 5.000.000,00</td>
              <td>Rp 4.000.000,00</td>
              <td>Rp 3.000.000,00</td>
            </tr>
            <tr>
              <td>Juni</td>
              <td>Rp 1.000.000,00</td>
              <td>Rp 7.000.000,00</td>
              <td>Rp 2.000.000,00</td>
              <td>Rp 20.000.000,00</td>
            </tr>
            <tr>
              <td>Juli</td>
              <td>Rp 1.000.000,00</td>
              <td>Rp 6.000.000,00</td>
              <td>Rp 6.000.000,00</td>
              <td>Rp 5.000.000,00</td>
            </tr>
            <tr>
              <td>Agustus</td>
              <td>Rp 1.000.000,00</td>
              <td>Rp 4.000.000,00</td>
              <td>Rp 3.000.000,00</td>
              <td>Rp 7.000.000,00</td>
            </tr>
            <tr>
              <td>September</td>
              <td>Rp 1.000.000,00</td>
              <td>Rp 7.000.000,00</td>
              <td>Rp 8.000.000,00</td>
              <td>Rp 9.000.000,00</td>
            </tr>
            <tr>
              <td>Oktober</td>
              <td>Rp 1.000.000,00</td>
              <td>Rp 10.000.000,00</td>
              <td>Rp 12.000.000,00</td>
              <td>Rp 1.000.000,00</td>
            </tr>
            <tr>
              <td>November</td>
              <td>Rp 1.000.000,00</td>
              <td>Rp 2.000.000,00</td>
              <td>Rp 3.000.000,00</td>
              <td>Rp 2.000.000,00</td>
            </tr>
            <tr>
              <td>Desember</td>
              <td>Rp 1.000.000,00</td>
              <td>Rp 4.000.000,00</td>
              <td>Rp 6.000.000,00</td>
              <td>Rp 7.000.000,00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


@endsection