@extends('layouts.app')
@section('tittle', 'paket')
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Paket</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('paket.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_paket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Paket</label>
                    <input type="text" id="nama_paket" name="nama_paket" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="bandwith"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">bandwith</label>
                    <input type="bandwith" id="bandwith" name="bandwith" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">harga</label>
                    <input type="text" id="harga" name="harga" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jenis_paket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                        Paket</label>
                    <select id="jenis_paket" name="jenis_paket" class="form-control" required autofocus>
                        <option value="Fiber">Fiber</option>
                        <option value="ADSL">ADSL</option>
                    </select>
                    <span id="jenis_paket_error" class="text-danger"></span>
                </div>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Submit</button>
            </form>
        </div>
    </div>
@endsection
