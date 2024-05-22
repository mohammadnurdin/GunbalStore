@extends('layouts.app')
@section('tittle', 'Pencabutan')
@section('contents')


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Pencabutan</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pencabutan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_pengajuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                        Pengajuan</label>
                    <select name="id_pengajuan" id="id_pengajuan" class="form-control" required autofocus>
                        @forelse ($pengajuan as $png)
                            <option value="{{ $png->id }}">{{ $png->id }}</option>
                        @empty
                            <option value="0">Tidak Ada</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_pelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Pelanggan</label>
                    <select name="id_pelanggan" id="id_pelanggan" class="form-control" autofocus>
                        @forelse ($pelanggan as $plg)
                            <option value="{{ $plg->id }}">{{ $plg->nama_pelanggan }}</option>
                        @empty
                            <option value="0">Tidak Ada</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_paket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paket</label>
                    <select name="id_paket" id="id_paket" class="form-control" autofocus>
                        @forelse ($paket as $pkt)
                            <option value="{{ $pkt->id }}">{{ $pkt->nama_paket }}</option>
                        @empty
                            <option value="0">Tidak Ada</option>
                        @endforelse
                    </select>
                </div>

                {{-- <div>
                            <label for="paket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paket</label>
                            <select id="paket" name="paket" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus>
                                <option value="">Pilih Paket</option>
                                <option value="Paket Hemat 1">Paket Hemat 1</option>
                                <option value="Paket Hemat 2">Paket Hemat 2</option>
                                <option value="Paket Bisnis">Paket Bisnis</option>
                            </select>
                        </div> --}}


                <div class="form-group">
                    <label for="tgl_pencabutan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Pencabutan</label>
                    <input type="date" id="tgl_pencabutan" name="tgl_pencabutan"class="form-control" required autofocus>
                </div>

                <div class="form-group">
                    <label for="id_pegawai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Pegawai</label>
                    <select name="id_pegawai" id="id_pegawai"class="form-control" required autofocus>
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
                    <input type="text" id="alasan" name="alasan"class="form-control" required autofocus>
                </div>

                <div class="form-group">
                    <label for="status"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select id="status" name="status"class="form-control" required autofocus>
                        <option value="1">Accepted</option>
                        <option value="0">Proses</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Submit</button>

            </form>
        </div>
    </div>
@endsection
