@extends('layouts.app')
@section('tittle', 'pengajuan')
@section('contents')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengajuan</h1>
</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="flex justify-between items-center">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pemasangan</h6>
                        <hr>
                        <a href="{{ route('pengajuan.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
                            Tambah
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                  
                                    <th>
                                        Nama Pelanggan
                                    </th>
                                    <th>
                                        Paket
                                    </th>
                                    <th>
                                        Bandwith
                                    </th>

                                    <th>
                                        Tanggal Pemasangan
                                    </th>
                                    <th>
                                        Nama Pegawai
                                    </th>
                                    <th>
                                        No Telpon
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($pengajuans as $no => $pengajuan)
                                    <tr>
                                        <th>
                                            {{ $no + 1 }}
                                        </th>
                                        <td>
                                            <a href="{{ route('pengajuan.show', $pengajuan->id) }}">
                                                {{ $pengajuan->pelanggan->nama_pelanggan }}
                                            </a>
                                        </td>
                                        <td>
                                            {{ $pengajuan->paket->nama_paket }}
                                        </td>
                                        <td>
                                            {{ $pengajuan->paket->bandwith }}
                                        </td>

                                        <td>
                                            {{ $pengajuan->tgl_pemasangan }}
                                        </td>
                                        <td>
                                            {{ $pengajuan->user->name }}
                                        </td>
                                        <td>
                                            {{ $pengajuan->user->no_telp }}
                                        </td>
                                        <td>
                                            {{-- {{ $pengajuan->status ? 'Proses' : 'On Proses' }} --}}
                                            @if ($pengajuan->status)
                                                <i class="fa-solid fa-check text-green-500"></i>
                                            @else
                                                <i class="fas fa-spinner text-yellow-500 mr-1"></i>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ route('pengajuan.edit', $pengajuan->id) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="{{ route('pengajuan.destroy', $pengajuan->id) }}"
                                                method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                                        class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection