<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()->is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
</li>
<li class="{{request()->is('pegawai') ? 'active' : ''}}"><a href="/pegawai"><i class="fa fa-user"></i> <span>Pegawai</span></a></li>
<li class="{{request()->is('transaksi') ? 'active' : ''}}"><a href="/transaksi"><i class="fa fa-book"></i> <span>Transaksi</span></a></li>
<li class="{{request()->is('laporan') ? 'active' : ''}}"><a href="/laporan"><i class="fa fa-book"></i> <span>Laporan</span></a></li>