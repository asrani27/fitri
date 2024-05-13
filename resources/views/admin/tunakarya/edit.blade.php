@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Edit tunakarya</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="/superadmin/tunakarya/edit/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" value="{{$data->nama}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" name="tempat_lahir" class="form-control"  value="{{$data->tempat_lahir}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="date" name="tgl_lahir" class="form-control"  value="{{$data->tgl_lahir}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Umur</label>
                    <div class="col-sm-10">
                      <input type="text" name="umur" class="form-control"  value="{{$data->umur}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="jkel">
                        <option value="L" {{$data->jkel == 'L' ? 'selected':''}}>Laki-Laki</option>
                        <option value="P" {{$data->jkel == 'P' ? 'selected':''}}>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="agama">
                        <option value="islam" {{$data->agama == 'islam' ? 'selected':''}}>Islam</option>
                        <option value="kristen" {{$data->agama == 'Lristen' ? 'selected':''}}>Kriten</option>
                        <option value="hindu" {{$data->agama == 'hindu' ? 'selected':''}}>Hindu</option>
                        <option value="buddha" {{$data->agama == 'buddha' ? 'selected':''}}>Buddha</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_ayah" class="form-control" value="{{$data->nama_ayah}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_ibu" class="form-control"  value="{{$data->nama_ibu}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control"  value="{{$data->alamat}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-save"></i> Update</button>
                      <a href="/superadmin/tunakarya" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                  </div>
              </div>
            </form>
          </div>
    </div>
   </div>
    
</section>


@endsection
@push('js')

@endpush

