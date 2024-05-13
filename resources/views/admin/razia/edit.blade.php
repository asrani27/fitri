@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Edit razia</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="/superadmin/razia/edit/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Razia</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal" class="form-control" value="{{$data->tanggal}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Razia</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control"  value="{{$data->nama}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Lokasi</label>
                    <div class="col-sm-10">
                      <input type="text" name="lokasi" class="form-control"  value="{{$data->lokasi}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Petugas</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="petugas_id">
                        @foreach ($petugas as $item)
                        <option value="{{$item->id}}" {{$data->petugas_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Anak Jalanan</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="anakjalanan_id">
                        @foreach ($anakjalanan as $item)
                        <option value="{{$item->id}}" {{$data->anakjalanan_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tuna Karya</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="tunakarya_id">
                        @foreach ($tunakarya as $item)
                        <option value="{{$item->id}}" {{$data->tunakarya_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kronologi</label>
                    <div class="col-sm-10">
                      <input type="text" name="kronologi" class="form-control"  value="{{$data->kronologi}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Penempatan</label>
                    <div class="col-sm-10">
                      <input type="text" name="penempatan" class="form-control"  value="{{$data->penempatan}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                      <input type="text" name="status" class="form-control"  value="{{$data->status}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-save"></i> Update</button>
                      <a href="/superadmin/razia" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
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

