<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()->is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
</li>
<li class="{{request()->is('transaksiMasyarakat') ? 'active' : ''}}"><a href="/transaksiMasyarakat"><i class="fa fa-book"></i> <span>Transaksi</span></a></li>
<li class="{{request()->is('laporanMasyarakat') ? 'active' : ''}}"><a href="/laporanMasyarakat"><i class="fa fa-book"></i> <span>Laporan</span></a></li>