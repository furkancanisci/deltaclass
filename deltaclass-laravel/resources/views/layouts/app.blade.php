<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deltaclass - @yield('title', 'Panel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('build/assets/app-Dotby_me.css') }}">
    @yield('styles')
</head>
<body>
    <div class="wrapper d-flex">
        <!-- Sidebar Navigation -->
        @auth
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-header">
                <h3>
                    <i class="fas fa-graduation-cap me-2"></i>
                    Deltaclass
                </h3>
                <strong><i class="fas fa-graduation-cap"></i></strong>
            </div>

            <!-- Main Navigation Menu -->
            <ul class="list-unstyled components">
                @yield('sidebar-menu')
            </ul>

            <!-- User Profile Section at Bottom -->
            <div class="sidebar-user">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=0D8ABC&color=fff" 
                             alt="Profile" class="rounded-circle me-2" width="32" height="32">
                        <span class="user-name">{{ auth()->user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profil</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Ayarlar</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt me-2"></i>Çıkış Yap
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @endauth

        <!-- Page Content -->
        <div id="content" class="flex-grow-1">
            <!-- Main Content -->
            <main class="p-4" style="padding-top: 20px !important;">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script src="{{ asset('build/assets/app-CAiCLEjY.js') }}"></script>
    @yield('scripts')
</body>
</html>