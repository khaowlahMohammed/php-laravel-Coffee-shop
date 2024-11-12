<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
    * {
        font-family: Almarai;
    }

    body {
        background-color: #f8f9fa;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        /* يجعل الجسم يغطي ارتفاع الصفحة بالكامل */
    }

    header {
        background-color: #d6c5b6;
        /* لون بني فاتح للفوتر */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    footer {
        background-color: #d6c5b6;
        /* لون بني فاتح للفوتر */
        text-align: center;
        padding: 20px 0;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        margin-top: auto;
    }

    .welcome-text {
        color: red;
        /* لون النص أحمر */
        margin: 0;
        /* إزالة الهامش العلوي والسفلي */
    }

    /* ضبط عرض اللوغو */
    .navbar-brand img {
        width: 25px;
        /* ضبطة العرض هنا حسب الرغبة */
    }
    </style>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button data-mdb-collapse-init class="navbar-toggler" type="button"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand mt-2 mt-lg-0" href="#">
                        <img src="{{ asset('images/coffee.png') }}" alt="كوفي Logo" loading="lazy" />
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projects</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <a class="text-reset me-3" href="#">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <div class="dropdown">
                        <a data-mdb-dropdown-init class="text-reset me-3 dropdown-toggle hidden-arrow" href="#"
                            id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                            <i class="fas fa-bell"></i>
                            <span
                                class="badge rounded-pill badge-notification bg-danger">{{ Session::get('counter') }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Some news</a></li>
                            <li><a class="dropdown-item" href="#">Another news</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow"
                            href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle"
                                height="25" alt="Avatar" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li><a class="dropdown-item" href="#">My profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer>
        <div class="container mt-3">
            <p class="mb-3">© 2024 Shopping. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>