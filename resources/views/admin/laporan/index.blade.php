@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-danger">
          <div class="box-header">
            <i class="ion ion-clipboard"></i><h3 class="box-title">Data Laporan</h3>

            <div class="box-tools">
              
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <form method="get" action="/superadmin/laporan/jenis" target="_blank">
              @csrf
              <select class="form-control" name="jenis">
                <option value="">-pilih laporan-</option>
                <option value="tunakarya">Tuna Karya</option>
                <option value="anakjalanan">Anak Jalanan</option>
                <option value="petugas">Petugas</option>
                <option value="razia">Razia</option>
                <option value="jaminan">Jaminan</option>
              </select>
              <br/>
              <button type="submit" class="btn btn-sm btn-block btn-danger">PRINT</button>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        
        <!-- /.box -->
      </div>
</div>


@endsection
@push('js')

@endpush
