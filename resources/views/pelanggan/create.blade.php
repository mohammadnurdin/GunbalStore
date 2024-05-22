@extends('layouts.app')
@section('tittle', 'pelanggan')
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Pelanggan</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pelanggan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_pelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Pelanggan</label>
                    <input type="text" id="nama_pelanggan" name="nama_pelanggan" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                    </label>
                    <input type="text" id="alamat" name="alamat" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="kode_pos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Pos
                    </label>
                    <input type="text" id="kode_pos" name="kode_pos" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telepon
                    </label>
                    <input type="text" id="no_telp" name="no_telp" class="form-control" required autofocus>
                </div>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Submit</button>

            </form>
        </div>

        <script>
            const x = document.getElementById("alamat");

            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                }
            }

            function showPosition(position) {
                x.value = position.coords.latitude +
                    "," + position.coords.longitude;
            }

            getLocation();
        </script>
    </div>

@endsection
