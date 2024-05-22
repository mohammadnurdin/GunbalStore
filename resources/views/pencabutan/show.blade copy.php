@extends('layouts.app')
@section('tittle', 'Detail Pencabutan')
@section('contents')



    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="flex justify-between items-center">
                <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('detailpencabutan.store') }}" method="POST">
                @csrf
                <input type="hidden" name="id_pencabutan" value="{{ $pencabutan->id }}">

                <div class="form-group">
                    <label for="id_barang">Nama Barang</label>
                    <select name="id_barang" id="id_barang" class="form-control" required autofocus>
                        @forelse ($barang as $brg)
                            <option value="{{ $brg->id }}">{{ $brg->nama_barang }}</option>
                        @empty
                            <option value="0">Tidak Ada</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="qty">Quantity</label>
                    <input type="number" name="qty" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Submit
                </button>
        </div>
        </form>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Transaksi</th>
                            <th>Nama Barang</th>
                            <th>Qty</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail as $no => $dtl)
                            <tr
                                class="{{ $no % 2 === 0 ? 'bg-gray-50 dark:bg-gray-800' : 'bg-white dark:bg-gray-900' }} border-b dark:border-gray-700">
                                <th>
                                    {{ $no + 1 }}
                                </th>
                                <td>
                                    {{ $dtl->id_pencabutan }}
                                </td>
                                <td>
                                    {{ $dtl->barang->nama_barang }}
                                </td>
                                <td>
                                    {{ $dtl->qty }}
                                </td>
                                <td>
                                    <form action="{{ route('detailpencabutan.destroy', $dtl->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-600 focus:outline-none">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        @endsection
