<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Peminjaman</title>
    <style>
        h1 {
            margin: 0;
            padding: 0;
        }
        p {
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
        }

        table tr td{
            vertical-align: top;
        }
        .bold{font-weight: bold;}
        .tengah {text-align: center;}
        .kiri {text-align: left;}
        .kanan {text-align: right;}
        .garisbawah {border-bottom: 2px double black;padding-bottom: 5px;}

    </style>

</head>
<body>

    <table width="100%">
        <tr class="garisbawah">
            <td width="8%" class="tengah">
                <img src="{{ url('gambar', [$logo]) }}" width="80%" alt="">
            </td>
            <td>
                <h1>{{$nama_perpus}}</h1>
                <p>{{$ket}}</p>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td>
                <table>
                    <tr>
                        <td class="bold">Berdasarkan:</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            {{\Carbon\Carbon::parse($tanggalawal)->isoFormat('DD MMMM Y')}} s/d {{\Carbon\Carbon::parse($tanggalakhir)->isoFormat('DD MMMM Y')}}
                        </td>
                    </tr>
                </table>
            </td>
            <td class="kanan">Tanggal Cetak : {{\Carbon\Carbon::parse(date('Y-m-d'))->isoFormat('dddd, DD MMMM Y')}}</td>
        </tr>
    </table>
    <br>

    <table width="100%" border="1">
        <tr>
            <th>No</th>
            <th>Kd Buku</th>
            <th>Judul Buku</th>
            <th>Jumlah</th>
            <th>Tgl Peng.</th>
        </tr>

        @php
            $total = 0;
        @endphp
        @foreach ($peminjaman as $p)
        <tr>
            <td nowrap width="2px" class="tengah">{{$loop->iteration}}</td>
            <td class="tengah">{{$p->kd_buku}}</td>
            <td>{{ucwords(strtolower($p->judul_buku))}}</td>
            <td class="tengah">{{$p->jumlah_pinjam}}</td>
            <td class="kanan">{{\Carbon\Carbon::parse($p->created_at)->isoFormat('DD MMM')}}</td>
            @php
                $total = $total + $p->jumlah_pinjam;
            @endphp
        </tr>

        @endforeach
        <tr>
            <td colspan="3" class="bold tengah">TOTAL PINJAMAN BUKU</td>
            <td class="bold tengah" colspan="2"> {{$total}} Buku</td>
        </tr>

        <tr>
            <td colspan="3" class="bold tengah">TOTAL PEMINJAM</td>
            <td class="bold tengah" colspan="2"> {{count($peminjaman)}} Peminjamn</td>
        </tr>
    </table>

</body>
</html>
