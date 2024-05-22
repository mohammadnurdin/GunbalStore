@extends('layouts.app')
@section('tittle', 'barang')
@section('contents')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Barang</h1>
</div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="flex justify-between items-center">
                        <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                        <hr>
                        <a href="{{ route('barang.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
                            Tambah
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>QTY</th>
                                    <th>Satuan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($data as $no => $barang)
                                    <tr>
                                        <th>
                                            {{ $no + 1 }}
                                        </th>
                                        <td>{{ $barang['nama_barang'] }}</td>
                                        <td>{{ $barang['qty'] }}</td>
                                        <td>{{ $barang['satuan'] }}</td>
                                        <td>
                                            @if ($barang['status'])
                                                <i class="fa-solid fa-check text-green-500"></i>
                                            @else
                                                <i class="fa-solid fa-xmark text-red-500"></i>
                                            @endif
                                        </td>
                                        <td >
                                            <a href="{{ route('barang.edit', $barang['id']) }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit">
                                                    Edit</i>
                                            </a>
                                            <form action="{{ route('barang.destroy', $barang['id']) }}" method="POST"
                                                class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash">
                                                        Delete</i>
                                                </button>
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
