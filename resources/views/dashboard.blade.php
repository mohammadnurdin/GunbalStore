@extends('layouts.app')
@section('tittle', 'Dashboard')
@push('scripts')
    <script src="{{ $chart1->cdn() }}"></script>
    {{ $chart1->script() }}
    <script src="{{ $chart2->cdn() }}"></script>
    {{ $chart2->script() }}
    {{-- <script src="{{ $chart->cdn() }}"></script>
    {!! $chartpem->script() !!} --}}
    <script>
        var options = {
            series: [{
                name: "Desktops",
                data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
            }],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            title: {
                text: 'Product Trends by Month',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endpush

@section('contents')



    {{-- <h2 id="count_filter">{{isset($nurdin) }}</h2> --}}

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        @if (Auth::user()->role == 'A')
            <a href="pdf" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        @endif
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Barang</div>
                            <div id="count_filter" class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_brg }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('barang.index') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus">View</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Paket</div>
                            <div id="count_filter" class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_paket }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('paket.index') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus">View</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengajuan
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div id="count_filter" class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        {{ $jml_pengajuan }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('pengajuan.index') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus">View</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pelanggan</div>
                            <div id="count_filter" class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_pelanggan }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus">View</i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pemasangan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        {!! $chart1->container() !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pemutusan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body text-center">
                    <div class="chart-area">
                        {{-- <div id="chart"></div> --}}
                        {!! $chart2->container() !!}

                    </div>
                </div>

            </div>
        </div>
    </div>
    @push('script')
        <script src="{{ $chart1->cdn() }}"></script>
        {{ $chart1->script() }}
        <script src="{{ $chart2->cdn() }}"></script>
        {{ $chart2->script() }}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @endpush
@endsection
