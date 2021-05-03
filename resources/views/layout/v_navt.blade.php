<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()->is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
</li>
<li class="{{request()->is('pegawaiPenerima') ? 'active' : ''}}"><a href="/pegawaiPenerima"><i class="fa fa-book"></i> <span>Pegawai</span></a></li>
<li class="{{request()->is('transaksiPenerima') ? 'active' : ''}}"><a href="/transaksiPenerima"><i class="fa fa-book"></i> <span>Transaksi</span></a></li>
<li class="{{request()->is('laporanPenerima') ? 'active' : ''}}"><a href="/laporanPenerima/{{ Auth::user()->nip }}"><i class="fa fa-book"></i> <span>Laporan</span></a></li>