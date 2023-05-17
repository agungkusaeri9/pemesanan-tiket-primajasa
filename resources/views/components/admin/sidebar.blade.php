<div>
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">Primajasa</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}">PM</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item @if (Route::currentRouteName() === 'admin.dashboard') active @endif"><a class="nav-link"
                    href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i>
                    <span>Dashboard</span></a></li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.metode-pembayaran.index') }}"><i class="fas fa-folder"></i>
                    <span>Metode Pembayaran</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-folder"></i>
                    <span>User</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pesanan.index') }}"><i class="fas fa-folder"></i>
                    <span>Pesanan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.jenis-armada.index') }}"><i class="fas fa-folder"></i>
                    <span>Jenis Armada</span></a>
            </li>
        </ul>

    </aside>
</div>
