@extends('layouts.app')
@section('title', 'Detail Pengajuans')

@section('contents')
    <div class="mt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Diskon</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Harga Awal</th>
                                    <th>Diskon</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{ $pengajuan->id }}</th>
                                    <td>{{ $pengajuan->pelanggan->nama_pelanggan }}</td>
                                    <td>{{ $pengajuan->paket->harga }}</td>
                                    <td>{{ $detailpromo->promo->diskon ?? 0 }}</td>
                                    <td>{{ $pengajuan->paket->harga - ($detailpromo->promo->diskon ?? 0) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <hr>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="flex justify-between items-center">
                        <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('detailpengajuan.store') }}" method="POST">
                        @csrf <!-- CSRF Protection -->
                        <div class="form-row">
                            <input type="hidden" id="id_pengajuan" name="id_pengajuan" value="{{ $pengajuan->id }}">
                            {{-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="id_barang">Nama Barang</label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="id_barang" class="form-control" required>
                                        </div>
                                    </div>
                                </div> --}}

                            {{-- <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pelanggan</label>
                                    <select name="id_customer" class="js-example-basic-single form-control">
                                        @foreach ($pelanggan as $pelang)
                                            <option value="{{ $pelang->id_customer }}">{{ $pelang->nama_customer }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}


                            {{-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="qty">Quantity</label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="qty" class="form-control" required>
                                        </div>
                                    </div>
                                </div> --}}
                            <div class="col-md-2">
                                <div class="d-flex">
                                    <button type="button" style="margin-top: 35px;" onclick="tambahForm()"
                                        class="btn btn-primary btn-sm mr-2 btn-block">(+)</button>
                                    <button type="button" style="margin-top: 35px;" onclick="hapusForm()"
                                        class="btn btn-danger btn-sm btn-block">(-)</button>
                                </div>
                            </div>

                        </div>
                        <div class="form-row mt-3">
                            <div class="col-md-12">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="id_barang[]" id="id_barang[]" class="form-control"
                                                placeholder="Masukan Barang disini..." required autofocus>
                                                @forelse ($barang as $brg)
                                                    <option value="{{ $brg->id }}">{{ $brg->nama_barang }}</option>
                                                @empty
                                                    <option value="0">Tidak Ada</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="qty[]"
                                                placeholder="Tulis jumlah disini...">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Content ID Barang -->
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Submit</button>
                    </form>
                </div>
            </div>
        </div>


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-12">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Transaksi</th>
                                        <th>Nama Barang</th>
                                        <th>QTY</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($detail as $no => $dtl)
                                        <tr
                                            class="{{ $no % 2 === 0 ? 'bg-gray-50 dark:bg-gray-800' : 'bg-white dark:bg-gray-900' }} border-b dark:border-gray-700">
                                            <th>{{ $no + 1 }}</th>
                                            <td>{{ $dtl->id_pengajuan }}</td>
                                            <td>{{ $dtl->barang->nama_barang }}</td>
                                            <td>{{ $dtl->qty }}</td>
                                            <td>
                                                <form action="{{ route('detailpengajuan.destroy', $dtl->id) }}"
                                                    method="POST">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->

    <script>
        function tambahForm() {
            const element = `
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <select name="id_barang[]" id="id_barang[]" class="form-control" placeholder="Masukan Barang disini..."required autofocus>
                                                    @forelse ($barang as $brg)
                                                        <option value="{{ $brg->id }}">{{ $brg->nama_barang }}</option>
                                                    @empty
                                                        <option value="0">Tidak Ada</option>
                                                    @endforelse
                                                </select>                    </div>
                </div>
            <div class="col-md-6">
                <div class="form-group">
                        <input type="number" class="form-control" name="qty[]" placeholder="Tulis jumlah disini...">
                    </div>
                </div>
            </div>
        </div>
        `;
            const form = document.createElement("div");
            form.innerHTML = element;
            document.getElementById('hasil').appendChild(form);
        }

        function hapusForm() {
            const list = document.getElementById('hasil');
            list.removeChild(list.lastElementChild);
        }
        document.addEventListener('keyup', (event) => {
            if (event.code === 'F1') {
                tambahForm();
            } else if (event.code === 'F2') {
                hapusForm();
            } else if (event.code === 'Enter') {
                document.getElementById("formPJ").submit();
            }
        }, false);
        // document.addEventListener('keyup', (event) => {
        //  var name = event.key;
        //  var code = event.code;
        //  // Alert the key name and key code on keydown
        //  alert(`Key pressed ${name} \r\n Key code value: ${code}`);
        // }, false);
    </script>
@endsection
