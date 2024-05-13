
<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU UTAMA</li>
    
    @if (Auth::user()->hasRole('superadmin'))
        
    <li class="{{ (request()->is('superadmin')) ? 'active' : '' }}"><a href="/superadmin"><i class="fa fa-home"></i> <span><i>Beranda</i></span></a></li>
    
    {{-- <li class="{{ (request()->is('superadmin/user*')) ? 'active' : '' }}"><a href="/superadmin/user"><i class="fa fa-check"></i> <span><i>Data Admin</i></span></a></li> --}}
    <li class="{{ (request()->is('superadmin/tunakarya*')) ? 'active' : '' }}"><a href="/superadmin/tunakarya"><i class="fa fa-check"></i> <span><i>Tuna Karya</i></span></a></li>
    <li class="{{ (request()->is('superadmin/anakjalanan*')) ? 'active' : '' }}"><a href="/superadmin/anakjalanan"><i class="fa fa-check"></i> <span><i>Anak Jalanan</i></span></a></li>
    <li class="{{ (request()->is('superadmin/petugas*')) ? 'active' : '' }}"><a href="/superadmin/petugas"><i class="fa fa-check"></i> <span><i>Petugas</i></span></a></li>
    <li class="{{ (request()->is('superadmin/razia*')) ? 'active' : '' }}"><a href="/superadmin/razia"><i class="fa fa-check"></i> <span><i>Razia</i></span></a></li>
    <li class="{{ (request()->is('superadmin/jaminan*')) ? 'active' : '' }}"><a href="/superadmin/jaminan"><i class="fa fa-check"></i> <span><i>Jaminan</i></span></a></li>
    <li class="{{ (request()->is('superadmin/laporan*')) ? 'active' : '' }}"><a href="/superadmin/laporan"><i class="fa fa-file"></i> <span><i>Laporan </i></span></a></li>
    <li><a href="/logout"><i class="fa fa-sign-out"></i> <span><i>Logout</i></span></a></li>
    @else
        
    {{-- <li class="{{ (request()->is('pemohon/daftar-layanan*')) ? 'active' : '' }}"><a href="/pemohon/daftar-layanan"><i class="fa fa-list"></i> <span>Daftar Layanan</span></a></li> --}}
    @endif
    </ul>
    <!-- /.sidebar-menu -->
</section>