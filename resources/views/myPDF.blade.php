<!DOCTYPE html>
<html>

<head>
    <title>Laporan Pdf</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    {{-- <h1>{{ $title }}</h1> --}}
    <h1>Laporan GunbalStore</h1>
    <p>{{ $date }}</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>

    <table class="table table-bordered">
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
        </tr>
        @foreach ($pengajuan as $pengajuan)
            <tr>
                <td> {{ $pengajuan->id }}</td>
                <td>
                    {{ $pengajuan->pelanggan->nama_pelanggan }}
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
        @endforeach
    </table>

</body>

</html>
