@extends('layouts.app')
@section('tittle', 'pelanggan')
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Pelanggan</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-5">
                    <label for="nama_pelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Pelanggan</label>
                    <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}"
                        class="form-control" required autofocus>
                </div>

                <div class="mb-5">
                    <label for="alamat"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <input type="text" id="alamat" name="alamat" value="{{ $pelanggan->alamat }}" required autofocus
                        class="form-control" required autofocus>
                </div>

                <div class="mb-5">
                    <label for="kode_pos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                        Pos</label>
                    <input type="text" id="kode_pos" name="kode_pos" value="{{ $pelanggan->kode_pos }}" required
                        autofocus class="form-control" required autofocus>
                </div>
                <div class="mb-5">
                    <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                        Telepon</label>
                    <input type="text" id="no_telp" name="no_telp" value="{{ $pelanggan->no_telp }}" required autofocus
                        class="form-control" required autofocus>
                </div>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Simpan</button>

            </form>
        </div>
    </div>

@endsection
