@extends('layouts.app')
@section('tittle', 'paket')
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah paket</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-5">
                    <label for="nama_barang"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nama_barang</label>
                    <input type="text" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}"
                        class="form-control" required autofocus>
                </div>
                <div class="mb-5">
                    <label for="qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">qty</label>
                    <input type="text" id="qty" name="qty" value="{{ $barang->qty }}" class="form-control"
                        required autofocus>
                </div>
                <div class="mb-5">
                    <label for="satuan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">satuan</label>
                    <input type="ineteger" id="satuan" name="satuan" value="{{ $barang->satuan }}" class="form-control"
                        required autofocus>
                </div>
                <div class="mb-5">
                    <label for="status"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">status</label>
                    <select id="status" name="status" value="{{ $barang->status }}" class="form-control" required
                        autofocus>
                        <option value="1">Ada</option>
                        <option value="0">Tidak Ada</option>
                    </select>
                    <span id="status_error" class="text-danger"></span>
                </div>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Simpan</button>

            </form>
        </div>
    </div>
@endsection
