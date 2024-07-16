<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Koperasi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('customer.index') }}">Nasabah</a> --}}
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('mandatory-saving.index') }}">Simpanan Wajib</a> --}}
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @can('user')

                            <li><a class="dropdown-item" href="/">Home</a></li>
                            <li><a class="dropdown-item" href="{{ route('customer.index') }}">Info Nasabah</a></li>
                            @endcan
                            @can('admin')
                            <li><a class="dropdown-item" href="{{ route('admin-customer.index') }}">Kelola Nasabah</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin-mandatory-saving.index') }}">Kelola Pinjaman</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin-role.index') }}">Kelola Role</a></li>
                            @endcan
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                                </form>

                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>

                @endauth
            </ul>
        </div>
    </div>
</nav>
