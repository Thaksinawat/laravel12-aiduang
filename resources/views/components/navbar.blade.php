
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ route('news.index') }}">Laravel News</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="/">หน้าแรก</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('news.index') }}">ข่าวทั้งหมด</a></li>
                @auth
                    @if(auth()->user()->is_admin ?? false)
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.news.create') }}">เพิ่มข่าว</a></li>
                    @endif
                @endauth
            </ul>
            <ul class="navbar-nav ms-3">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name ?? 'Admin' }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">โปรไฟล์</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">ออกจากระบบ</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>