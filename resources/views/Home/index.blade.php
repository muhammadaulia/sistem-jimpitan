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
              Chart
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tabelLaporan">
              <span data-feather="file"></span>
              Tabel Keuangan
            </a>
          </li>
        </ul>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Chart Keuangan Dalam 1 Tahun</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          
          <div class="dropdown">
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span data-feather="calendar"></span>
              Minggu Ini
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Minggu Lalu</a>
            </div>

          </div>
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
              datasets: [{ // index pertama / datasets[0]
                label: 'Jumlah Jimpitan',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [1000000, 2000000, 5000000, 2000000, 2500000, 3500000, 4500000],
                showLine: true,
                spanGaps: true,
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

      <div class="d-flex justify-content-center">
        <div class="row col-sm-2">

          <label for="">Nominal Uang: </label>
          <input id="nominal" type="number" placeholder="1000000">

          <button class="btn btn-primary mt-3" id="pushInput" type="submit">Input</button>
          
        </div>
      </div>

      <script>
        // Dynamic Data Dari Input
        const pushInput = document.getElementById('pushInput');
      
        pushInput.addEventListener('click', pushValue);
      
        function pushValue() {
          const nominalInput = document.getElementById('nominal');
          
          myChart.data.datasets[0].data.push(nominalInput.value);

          myChart.update();
        }

      </script>


      <div class="judulTabel">
        <h2 id="tabelLaporan">Tabel Keuangan</h2>
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
            @foreach ($keuangan as $item)
            
            <tr>
              <td>{{ $item['bulan'] }}</td>
              <td>Rp. {{ $item['minggu1'] }}</td>
              <td>Rp. {{ $item['minggu2'] }}</td>
              <td>Rp. {{ $item['minggu3'] }}</td>
              <td>Rp. {{ $item['minggu4'] }}</td>
            </tr>
            
            @endforeach
                
            
            {{-- <tr>
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
            </tr> --}}
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

@endsection