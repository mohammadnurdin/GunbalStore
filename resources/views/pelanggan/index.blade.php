@extends('layouts.app')
@section('tittle', 'pelanggan')
@section('contents')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pelanggan</h1>
</div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="flex justify-between items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
                    <hr>
                    <a href="{{ route('pelanggan.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
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
                                        Alamat
                                    </th>
                                    <th>
                                        Kode Pos
                                    </th>
                                    <th>
                                        No Telepon
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($pelanggans as $no => $pelanggan)
                                    <tr>
                                        <th >
                                            {{ $no + 1 }}
                                        </th>
                                        <td >
                                            {{ $pelanggan->nama_pelanggan }}
                                        </td>
                                        <td >
                                            <a target="_blank"
                                                href="https://google.com/maps?q={{ $pelanggan->alamat }}"><i
                                                    class="fa-solid fa-location-dot"></i></a>
                                        </td>
                                        <td >
                                            {{ $pelanggan->kode_pos }}
                                        </td>
                                        <td >
                                            {{ $pelanggan->no_telp }}
                                        </td>


                                        <td >
                                            <a href="{{ route('pelanggan.edit', $pelanggan->id) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}"
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


