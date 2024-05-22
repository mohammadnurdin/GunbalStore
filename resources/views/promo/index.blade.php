@extends('layouts.app')
@section('tittle', 'promo')
@section('contents')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Promo</h1>
</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="flex justify-between items-center">
                        <h6 class="m-0 font-weight-bold text-primary">Data Promo</h6>
                        <hr>
                        <a href="{{ route('promo.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
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
                                        Paket
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                    <th>
                                        Diskon
                                    </th>
                                    <th>
                                        Expired
                                    </th>

                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($promos as $no => $promo)
                                    <tr
                                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $no + 1 }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $promo->paket->nama_paket }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $promo->paket->harga }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $promo->diskon }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $promo->expired }}
                                        </td>


                                        <td class="px-6 py-4">
                                            <a href="{{ route('promo.edit', $promo->id) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="{{ route('promo.destroy', $promo->id) }}" method="POST"
                                                class="inline-block">
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
