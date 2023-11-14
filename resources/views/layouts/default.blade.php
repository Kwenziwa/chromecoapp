<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body id="section_1">

    <header class="site-header">
        @include('includes.header')
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('frontend/images/logo.png') }}" class="logo img-fluid"
                    alt="Chronic Medication Collection">
                <span>
                    Chronic Medication Collection
                    <small>YEmpowering Health, One Pill at a Time</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#top">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">Our Team</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_6">Contact</a>
                    </li>

                    @auth
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="/admin/login">Dashboard</a>
                    </li>

                    @else
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="/admin/login">Sign In</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="/admin/register">Sign Up</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main>

        @yield('content')

    </main>

    <footer class="site-footer">
        @include('includes.footer')
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
