@extends('layouts.app')
@section('tittle', 'Pencabutan')
@section('contents')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pencabutan</h1>
</div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="flex justify-between items-center">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pencabutan</h6>
                        <hr>
                        <a href="{{ route('pencabutan.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
                            Tambah
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                                        Harga
                                    </th>
                                    <th>
                                        Tanggal Pencabutan
                                    </th>
                                    <th>
                                        Nama Pegawai
                                    </th>
                                    <th>
                                        Alasan
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
                                @foreach ($pencabutans as $no => $pencabutan)
                                    <tr>
                                        <th>
                                            {{ $no + 1 }}
                                        </th>
                                        {{-- <td class="px-6 py-4">
                                    {{ $pencabutan->pengajuan->id }}
                                </td> --}}
                                        {{-- <td class="px-6 py-4">
                                    {{ $pencabutan->pelanggan->id }}
                                </td> --}}
                                        <td>
                                            <a href="{{ route('pencabutan.show', $pencabutan->id) }}">
                                                {{ $pencabutan->pelanggan->nama_pelanggan }} </a>
                                        </td>
                                        <td>
                                            {{ $pencabutan->paket->nama_paket }}
                                        </td>
                                        <td>
                                            {{ $pencabutan->paket->bandwith }}
                                        </td>
                                        <td>
                                            {{ $pencabutan->paket->harga }}
                                        </td>
                                        <td>
                                            {{ $pencabutan->tgl_pencabutan }}

                                        </td>
                                        <td>
                                            {{ $pencabutan->user->name }}
                                        </td>
                                        <td>
                                            {{ $pencabutan->alasan }}
                                        </td>
                                        <td>
                                            {{-- {{ $pencabutan->status ? 'Accepted' : 'Proses' }} --}}

                                            @if ($pencabutan->status)
                                                <i class="fa-solid fa-check text-green-500"></i>
                                            @else
                                                <i class="fas fa-spinner text-yellow-500 mr-1"></i>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ route('pencabutan.edit', $pencabutan->id) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="{{ route('pencabutan.destroy', $pencabutan->id) }}"
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
