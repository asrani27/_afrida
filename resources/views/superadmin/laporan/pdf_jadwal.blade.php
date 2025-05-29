<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>

<body>

    <table width="100%">
        <tr>
            <td width="15%">
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('logo/kalsel.png'))) }}"
                    width="80px">
            </td>
            <td style="text-align: center;" width="60%">

                <font size="20px"><b>DINAS SOSIAL PROVINSI KALIMANTAN SELATAN <br />
                    </b></font>
                Jl. Letjend. R. Soeprapto No.8, Antasan Besar, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan
                Selatan 70231
            </td>
            <td width="15%">
            </td>
        </tr>
    </table>
    <hr>
    <h3 style="text-align: center">LAPORAN DATA JADWAL
    </h3>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Jenis</th>
            <th>Penyelenggara</th>
            <th>Instruktur</th>
            <th>Tgl Mulai</th>
            <th>Tgl Selesai</th>
            <th>keterangan</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->jenis == null ? '': $item->jenis->nama}}</td>
            <td>{{$item->penyelenggara == null ? '': $item->penyelenggara->nama}}</td>
            <td>{{$item->instruktur == null ? '': $item->instruktur->nama}}</td>
            <td>{{\Carbon\Carbon::parse($item->mulai)->format('d M Y')}}</td>
            <td>{{\Carbon\Carbon::parse($item->selesai)->format('d M Y')}}</td>
            <td>{{$item->keterangan}}</td>
        </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td></td>
            <td><br />Banjarmasin, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br />
                Pimpinan<br /><br /><br /><br />

                <u>-</u><br />
                NIP.xxxxxxxxx
            </td>
        </tr>
    </table>
</body>

</html>