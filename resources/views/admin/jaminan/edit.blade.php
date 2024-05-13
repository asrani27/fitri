@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Edit jaminan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="/superadmin/jaminan/edit/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Jaminan</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal" class="form-control" value="{{$data->tanggal}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Penjamin</label>
                    <div class="col-sm-10">
                      <input type="text" name="penjamin" class="form-control"  value="{{$data->penjamin}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Telp</label>
                    <div class="col-sm-10">
                      <input type="text" name="telp" class="form-control"  value="{{$data->telp}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Razia</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="razia_id">
                        @foreach ($razia as $item)
                        <option value="{{$item->id}}" {{$data->razia_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Anak Jalanan</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="anak_jalanan_id">
                        @foreach ($anakjalanan as $item)
                        <option value="{{$item->id}}" {{$data->anak_jalanan_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tuna Karya</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="tuna_karya_id">
                        @foreach ($tunakarya as $item)
                        <option value="{{$item->id}}" {{$data->tuna_karya_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Penempatan</label>
                    <div class="col-sm-10">
                      <input type="text" name="penempatan" class="form-control"  value="{{$data->penempatan}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control"  value="{{$data->alamat}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">jaminan</label>
                    <div class="col-sm-10">
                      <input type="text" name="jaminan" class="form-control"  value="{{$data->jaminan}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-save"></i> Update</button>
                      <a href="/superadmin/jaminan" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
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

