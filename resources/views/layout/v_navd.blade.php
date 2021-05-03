<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()->is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
</li>
<li class="{{request()->is('pegawaiAdmin') ? 'active' : ''}}"><a href="/pegawaiAdmin"><i class="fa fa-book"></i> <span>Users</span></a></li>
<li class="{{request()->is('laporanAdmin') ? 'active' : ''}}"><a href="/laporanAdmin"><i class="fa fa-book"></i> <span>Laporan</span></a></li>
<li class="{{request()->is('transaksiAdmin') ? 'active' : ''}}"><a href="/transaksiAdmin"><i class="fa fa-book"></i> <span>Transaksi</span></a></li>