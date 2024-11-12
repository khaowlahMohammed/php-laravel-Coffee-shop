<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Almarai&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <style>
    * {
        font-family: 'Almarai', sans-serif;
    }

    .navbar-nav {
        margin-left: auto;
    }

    .login-register {
        display: flex;
        gap: 15px;
    }

    .search-form {
        flex-grow: 1;
        display: flex;
        justify-content: center;
    }

    .sidebar-menu {
        min-height: 100vh;
    }

    .sidebar-item {
        padding: 10px 15px;
    }

    .container-fluid {
        padding: 0;
    }

    .main-content {
        padding: 20px;
    }
    </style>
</head>

<body dir="rtl">
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><i class="bi bi-house me-1"></i> الرئيسية</a>
                            </li>
                        </ul>
                        <!-- شريط البحث -->
                        <div class="search-form mx-auto d-none d-lg-block text-center">
                            <!--  text-center -->
                            <form class="d-flex justify-content-center" style="max-width: 400px; margin: auto;">
                                <!--  justify-content-center -->
                                <input class="form-control me-1" type="search" placeholder="بحث" aria-label="Search">
                                <button class="btn btn-success" type="submit">بحث</button>
                            </form>
                        </div>



                        <!-- روابط دخول وتسجيل -->
                        <div class="login-register d-flex align-items-center">
                            @guest
                            @if (Route::has('login'))
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="bi bi-box-arrow-in-right me-1"></i> دخول
                            </a>
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="bi bi-person-plus me-1"></i> تسجيل
                            </a>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown"
                                    data-bs-toggle="dropdown">
                                    <i class="bi bi-person-circle me-1"></i>{{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">إعدادات الحساب</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="bi bi-box-arrow-right me-1"></i> تسجيل الخروج
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="container-fluid">
            <div class="row gx-0">
                <!-- Sidebar -->
                <div class="col-md-3 col-lg-2 bg-dark text-white sidebar-menu px-2">
                    <div class="d-flex flex-column">
                        <a href="#" class="text-white text-decoration-none sidebar-item">
                            <i class="bi bi-speedometer2 me-2"></i> لوحة التحكم
                        </a>
                        <ul class="nav flex-column">
                            <li class="nav-item sidebar-item">
                                <a href="{{ route('index') }}" class="nav-link text-white">
                                    <i class="bi bi-house me-2"></i> الرئيسية
                                </a>
                            </li>
                            <li class="nav-item sidebar-item">
                                <a href="{{ route('products') }}" class="nav-link text-white">
                                    <i class="bi bi-table me-2"></i> المنتجات
                                </a>
                            </li>
                            <li class="nav-item sidebar-item">
                                <a href="{{ route('showdet') }}" class="nav-link text-white">
                                    <i class="bi bi-grid me-2"></i> تفاصيل المنتجات
                                </a>
                            </li>
                            <li class="nav-item sidebar-item">

                                <a href="{{ route('customers') }}" class="nav-link text-white">
                                    <i class="bi bi-people me-2"></i> العملاء
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col main-content">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <!--  publicبتجيب الملف الا في  -->

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>