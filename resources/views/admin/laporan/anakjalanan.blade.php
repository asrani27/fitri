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
            <td colspan=3 style="text-align:center"><br/><strong><u>LAPORAN DATA ANAK JALANAN</u></strong></td>
        </tr>
    </table>
    <br/>
    <table border=1 cellspacing="0" cellpadding="3" width="100%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat & tgl Lahir</th>
            <th>Jkel</th>
            <th>Umur</th>
            <th>Agama</th>
            <th>Ayah</th>
            <th>Ibu</th>
            <th>Alamat</th>
        </tr>
        @php
            $no =1;
        @endphp
        @foreach ($data as $key => $item)
            <tr>
                <td style="text-align: center">{{$no++}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->tempat_lahir}}, {{\Carbon\Carbon::parse($item->tgl_lahir)->format('d M Y')}}</td>
                <td>{{$item->jkel}}</td>
                <td>{{$item->umur}}</td>
                <td>{{$item->agama}}</td>
                <td>{{$item->nama_ayah}}</td>
                <td>{{$item->nama_ibu}}</td>
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