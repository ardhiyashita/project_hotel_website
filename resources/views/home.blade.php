@extends('layouts/master')

@section('title', 'Hotel')

@section('content')
<div class="row">
    <div class="row mb-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-xl-1 col-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body" style="padding-bottom: 0">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Hotel Transaction</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="mt-2" style="display: inline-block; text-align: right; width: 100%">
                        <a href="{{ route('hotel_transaction_list') }}" class="text-xs font-weight-bold text-uppercase text-primary">More Info >></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-xl-1 col-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body" style="padding-bottom: 0">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Clean Linen</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="mt-2" style="display: inline-block; text-align: right; width: 100%">
                        <a href="{{ route('hotel_transaction_list') }}" class="text-xs font-weight-bold text-uppercase text-success">More Info >></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-xl-1 col-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body" style="padding-bottom: 0">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Linen Aging</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="mt-2" style="display: inline-block; text-align: right; width: 100%">
                        <a href="{{ route('hotel_transaction_list') }}" class="text-xs font-weight-bold text-uppercase text-danger">More Info >></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-xl-1 col-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body" style="padding-bottom: 0">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Discard Linen</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="mt-2" style="display: inline-block; text-align: right; width: 100%">
                        <a href="{{ route('hotel_transaction_list') }}" class="text-xs font-weight-bold text-uppercase text-warning">More Info >></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-xl-1 col-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body" style="padding-bottom: 0">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                Linen to Receive</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="mt-2" style="display: inline-block; text-align: right; width: 100%">
                        <a href="{{ route('hotel_transaction_list') }}" class="text-xs font-weight-bold text-uppercase text-secondary">More Info >></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- <div class="row">
    <div class="col-md-8 col-12 mb-3">
        <div class="card shadow">
            <div class="card-header">
                <h5 class="card-title">Grafik Penjualan Perbulan Tahun {{ date('Y') }}</h5>
            </div>
            <div class="card-body">
                <canvas height="400px" id="chart-penjualan"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-12 mb-3">
        <div class="card shadow">
            <div class="card-header">
                <h5 class="card-title">Grafik Penjualan Kategori</h5>
            </div>
            <div class="card-body">
                <canvas height="400px" id="chart-penjualan-kategori"></canvas>
            </div>
        </div>
    </div>
</div> -->
@endsection
<!-- @section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js" integrity="sha512-tMabqarPtykgDtdtSqCL3uLVM0gS1ZkUAVhRFu1vSEFgvB73niFQWJuvviDyBGBH22Lcau4rHB5p2K2T0Xvr6Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        getCharPenjualan = () => {
            $.ajax({
                url: '{{ route("get-data-penjualan") }}',
                method: 'GET',
                success: function(response) {
                    var ctx = document.getElementById('chart-penjualan');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                            datasets: [{
                                label: 'Data Penjualan Kotor',
                                data: response.kotor,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                ],
                                borderWidth: 1
                            },
                            {
                                label: 'Data Penjualan Bersih',
                                data: response.bersih,
                                backgroundColor: [
                                    'rgba(54, 162, 235, 0.2)',
                                ],
                                borderColor: [
                                    'rgba(54, 162, 235, 1)',
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                }
            })
        }
        getDataKategoriPenjualan = () => {
            $.ajax({
                url: '{{ route("get-data-kategori-penjualan") }}',
                method: 'GET',
                success: function(response) {
                    var ctx = document.getElementById('chart-penjualan-kategori');
                    var myPieChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: response.labels,
                            datasets: [{
                                label: 'Data Penjualan Kotor',
                                data: response.data,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                ],
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                        }
                    });
                }
            })
        }
        $(document).ready(function() {
            getCharPenjualan();
            getDataKategoriPenjualan();
        });
    </script>
@endsection -->
