<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('mahasiswa.profil') }}">Praktikum Blade</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('mahasiswa.profil') ? 'active' : '' }}"
                   href="{{ route('mahasiswa.profil') }}">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('mahasiswa.daftar') ? 'active' : '' }}"
                   href="{{ route('mahasiswa.daftar') }}">Daftar Mahasiswa</a>
            </li>
        </ul>
    </div>
</nav>