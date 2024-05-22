@extends('layouts.app')
@section('tittle', 'promo')
@section('contents')


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Promo</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('promo.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nama_paket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Pelanggan</label>
                    <select name="id_paket" id="id_paket" class="form-control" required autofocus>
                        @forelse ($paket as $pkt)
                            <option value="{{ $pkt->id }}">{{ $pkt->nama_paket }}</option>
                        @empty
                            <option value="0">Tidak Ada</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="diskon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diskon
                    </label>
                    <input type="integer" id="diskon" name="diskon" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="expired" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expired
                    </label>
                    <input type="date" id="expired" name="expired" class="form-control" required autofocus>
                </div>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Submit</button>

            </form>
        </div>
    </div>
@endsection
