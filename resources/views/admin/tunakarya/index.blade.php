@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data tunakarya</h3>
    
              <div class="box-tools">
                <a href="/superadmin/tunakarya/create" class="btn btn-sm btn-warning "><i class="fa fa-plus-circle"></i> Tambah</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th class="text-center">No</th>
                  <th>Nama</th>
                  <th>Tempat & tgl Lahir</th>
                  <th>Jkel</th>
                  <th>Umur</th>
                  <th>Agama</th>
                  <th>Ayah</th>
                  <th>Ibu</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{1 + $key}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->tempat_lahir}}, {{\Carbon\Carbon::parse($item->tgl_lahir)->format('d M Y')}}</td>
                    <td>{{$item->jkel}}</td>
                    <td>{{$item->umur}}</td>
                    <td>{{$item->agama}}</td>
                    <td>{{$item->nama_ayah}}</td>
                    <td>{{$item->nama_ibu}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>
                      <a href="/superadmin/tunakarya/edit/{{$item->id}}" class="btn btn-xs btn-success">edit</a>
                         <a href="/superadmin/tunakarya/delete/{{$item->id}}"
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

