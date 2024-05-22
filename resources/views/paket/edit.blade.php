@extends('layouts.app')
@section('tittle', 'paket')
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit paket</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('paket.update', $paket->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-5">
                    <label for="nama_paket"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nama_paket</label>
                    <input type="text" id="nama_paket" name="nama_paket" value="{{ $paket->nama_paket }}"
                        class="form-control" required autofocus>
                </div>
                <div class="mb-5">
                    <label for="bandwith"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">bandwith</label>
                    <input type="text" id="bandwith" name="bandwith" value="{{ $paket->bandwith }}" class="form-control"
                        required autofocus>
                </div>
                <div class="mb-5">
                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">harga</label>
                    <input type="ineteger" id="harga" name="harga" value="{{ $paket->harga }}" class="form-control"
                        required autofocus>
                </div>
                <div class="mb-5">
                    <label for="jenis_paket"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">jenis_paket</label>
                    <select id="jenis_paket" name="jenis_paket" value="{{$paket->jenis_paket}}" class="form-control" required autofocus>
                        <option value="Fiber">Fiber</option>
                        <option value="ADSL">ADSL</option>
                    </select>
                    <span id="jenis_paket_error" class="text-danger"></span>
                </div>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Simpan</button>

            </form>
        </div>
    </div>
@endsection
