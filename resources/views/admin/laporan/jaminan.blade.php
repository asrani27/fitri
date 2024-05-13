<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <table border=0 width="100%">
        <tr>
            <td width="15%" style="text-align: right">
                <img src="/bjb.png" width="50%">
            </td>
            <td style="text-align: center">
                <h2><b>Sistem Informasi Pengolahan Data Tuna Karya Dan Anak Jalanan <br/> Dinas Sosial Kota Banjarbaru</b><br/></h2>
                

            </td>
            <td width="15%" style="text-align: right">
                
            </td>
        </tr>
        <tr>
            <td colspan=3 style="text-align:center"><br/><strong><u>LAPORAN DATA JAMINAN</u></strong></td>
        </tr>
    </table>
    <br/>
    <table border=1 cellspacing="0" cellpadding="3" width="100%">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Penjamin</th>
            <th>Telp</th>
            <th>Jaminan</th>
            <th>Razia</th>
            <th>Anak Jalanan</th>
            <th>Tuna Karya</th>
            <th>Penempatan</th>
            <th>alamat</th>
        </tr>
        @php
            $no =1;
        @endphp
        @foreach ($data as $key => $item)
            <tr>
                <td style="text-align: center">{{$no++}}</td>
                <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                <td>{{$item->penjamin}}</td>
                <td>{{$item->telp}}</td>
                <td>{{$item->jaminan}}</td>
                <td>{{$item->razia == null ? '' : $item->razia->nama}}</td>
                <td>{{$item->anakjalanan == null ? '': $item->anakjalanan->nama}}</td>
                <td>{{$item->tunakarya == null ? '': $item->tunakarya->nama}}</td>
                <td>{{$item->penempatan}}</td>
                <td>{{$item->alamat}}</td>
                
            </tr>
        @endforeach
    </table>
    <br/>
    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td>
                Banjarbaru, {{\Carbon\Carbon::today()->translatedFormat('d F Y')}}, <br/>
                
                Kepala Dinas Sosial,
                <br/><br/><br/><br/><br/>


                <b><u>Rokhyat Riyadi, SE, MS</u></b><br/>
                NIP. 19700503 199803 1 009

            </td>
        </tr>
    </table>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

$(document).ready(function(){
    window.print();
});
</script>
</html>