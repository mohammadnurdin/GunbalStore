@extends('layouts.app')
@section('tittle', 'Pencabutan')
@section('contents')


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Pencabutan</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pencabutan.update', $pencabutan->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="id_pengajuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id
                        Pengajuan</label>
                    <input type="text" name="id_pengajuan" value="{{ $pencabutan->id_pengajuan }}" class="form-control" required autofocus>
                </div>

                <input type="hidden" name="id_pelanggan" value="{{ $pencabutan->id_pelanggan }}">

                <div class="form-group">
                    <label for="id_pelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Pelanggan</label>
                    <input type="text" name="nama_pelanggan" value="{{ $pencabutan->pelanggan->nama_pelanggan }}" class="form-control" required autofocus>
                </div>

                {{-- <div>
    <label for="nama_pelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pelanggan</label>
    <select name="id_pelanggan" id="id_pelanggan" value="{{$pencabutan->pelanggan->id}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus>
        @forelse ($pelanggan as $plg)
            <option value="{{$plg->id}}">{{$plg->nama_pelanggan}}</option>
        @empty
            <option value="0">Tidak Ada</option>
        @endforelse
    </select>
</div> --}}
                <input type="hidden" name="id_paket" value="{{ $pencabutan->id_paket }}">


                <div class="form-group">
                    <label for="tgl_pencabutan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Pencabutan</label>
                    <input type="date" id="tgl_pencabutan" name="tgl_pencabutan"
                        value="{{ $pencabutan->tgl_pencabutan }}" class="form-control" required autofocus>
                </div>

                <div class="form-group">
                    <label for="id_pegawai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Pegawai</label>
                    <select name="id_pegawai" id="id_pegawai" class="form-control" required autofocus>
                        @forelse ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @empty
                            <option value="0">Tidak Ada</option>
                        @endforelse
                    </select>
                </div>


                <div class="form-group">
                    <label for="alasan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alasan</label>
                    <input type="text" id="alasan" name="alasan" value="{{ $pencabutan->alasan }}" class="form-control" required autofocus>
                </div>

                @if (Auth::user()->role == 'A' || Auth::user()->role == 'C')
                    <div class="form-group">
                        <label for="status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select id="status" name="status" class="form-control"required autofocus>
                            <option value="1">Accepted</option>
                            <option value="0">Proses</option>
                        </select>
                        <span id="status_error" class="text-danger"></span>
                    </div>
                @endif

                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Simpan</button>

            </form>
        </div>
    </div>
    </div>
    </div>
@endsection
