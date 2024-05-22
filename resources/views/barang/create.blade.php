@extends('layouts.app')
@section('tittle', 'barang')
@section('contents')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Paket</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('barang.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Barang</label>
                    <input type="text" id="nama_barang" name="nama_barang" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">qty</label>
                    <input type="integer" id="qty" name="qty" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="satuan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">satuan</label>
                    <input type="text" id="satuan" name="satuan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                        Paket</label>
                    <select id="status" name="status" class="form-control" required autofocus>
                        <option value="1">Ada</option>
                        <option value="0">Tidak Ada</option>
                    </select>
                    <span id="status_error" class="text-danger"></span>
                </div>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Submit</button>
            </form>
        </div>
    </div>
@endsection
