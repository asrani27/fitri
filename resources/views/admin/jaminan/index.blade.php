@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data jaminan</h3>
    
              <div class="box-tools">
                <a href="/superadmin/jaminan/create" class="btn btn-sm btn-warning "><i class="fa fa-plus-circle"></i> Tambah</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th class="text-center">No</th>
                  <th>Tanggal</th>
                  <th>Nama Penjamin</th>
                  <th>Telp</th>
                  <th>Jaminan</th>
                  <th>Razia</th>
                  <th>Anak Jalanan</th>
                  <th>Tuna Karya</th>
                  <th>Penempatan</th>
                  <th>alamat</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{1 + $key}}</td>
                    <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                    <td>{{$item->penjamin}}</td>
                    <td>{{$item->telp}}</td>
                    <td>{{$item->jaminan}}</td>
                    <td>{{$item->razia == null ? '' : $item->razia->nama}}</td>
                    <td>{{$item->anakjalanan == null ? '': $item->anakjalanan->nama}}</td>
                    <td>{{$item->tunakarya == null ? '': $item->tunakarya->nama}}</td>
                    <td>{{$item->penempatan}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>
                      <a href="/superadmin/jaminan/edit/{{$item->id}}" class="btn btn-xs btn-success">edit</a>
                         <a href="/superadmin/jaminan/delete/{{$item->id}}"
                            onclick="return confirm('Yakin ingin di hapus');"
                            class="btn btn-xs btn-danger">delete</a>
                    </td>
                </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </div>
</section>


@endsection
@push('js')

@endpush

