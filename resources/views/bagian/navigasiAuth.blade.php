<nav>
    <div class="judulNavigasi">
        Explore Nusantara
    </div>
    <ul>
        <li><a href="{{ url('/homepage') }}" class="{{ request()->is('homepage') ? 'active' : '' }}">Beranda</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle">Blog</a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/semuaBlog') }}">Semua Blog</a></li>
                <li><a href="{{ url('/blogAnda') }}"> Blog Anda</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle">Wisata</a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/semuaWisata') }}">Semua Wisata</a></li>
                <li><a href="{{ url('/wisataAnda') }}">Wisata Anda</a></li>
            </ul>
        </li>
        <li><a href="{{ url('/profil') }}" class="{{ request()->is('profil') ? 'active' : '' }}">Profil</a></li>
        <li><a href="{{ url('/keluar') }}" class="{{ request()->is('keluar') ? 'active' : '' }}">Keluar</a></li>
    </ul>
</nav>
