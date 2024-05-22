@extends('layouts.app')
@section('tittle', 'paket')
@section('contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket</h1>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="flex justify-between items-center">
                        <h6 class="m-0 font-weight-bold text-primary">Data Paket</h6>
                        <hr>
                        <a href="{{ route('paket.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
                            Tambah
                        </a>
                    </div>
                </div>
   

                {{-- <h2 id="count_filter">{{ $total }}</h2> --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Bandwith </th>
                                    <th>Harga</th>
                                    <th>Jenis Paket </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($pakets as $paket)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $paket->nama_paket }}</td>
                                        <td>{{ $paket->bandwith }}</td>
                                        <td>{{ $paket->harga }}</td>
                                        <td>{{ $paket->jenis_paket }}</td>
                                        {{-- <td>
                                            <a href="{{ route('paket.edit', $paket->id) }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit">Edit</i></a>
                                            <a href="{{ route('paket.destroy', $paket->id) }}"
                                                class="btn btn-danger btn-sm"><i class="fas fa-trash">Delete</i></a>
                                        </td> --}}

                                        <td>
                                            <a href="{{ route('paket.edit', $paket->id) }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit">Edit</i></a>
                                            <form action="{{ route('paket.destroy', $paket->id) }}" method="POST"
                                                class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash">Delete</i></button>
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
