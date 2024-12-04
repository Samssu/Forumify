<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Forumnity</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container flex justify-content-between">
            <a class="navbar-link" href="{{ route('home') }}">
                <img class="h-32px" src="{{ url('assets/images/textforumity.png') }}" alt="logo foruminty">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-0 mx-lg-3">
                    <li class="nav-item d-block d-lg-none d-xl-block">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" aria-current="page" href="#">Discussions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" aria-current="page" href="#">About Us</a>
                    </li>
                </ul>
                <form class="d-flex w-100 me-4 my-2 my-lg-0" role="search" action="#" method="GET">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><img
                                src="{{ url('assets/images/searchicon.png') }}" alt=""></span>
                        <input class="form-control border-start-0 ps-0" type="search" placeholder="Search"
                            aria-label="Search" name="" value="">
                    </div>
                </form>
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item my-auto">
                        <a class="nav-link text-nowrap" aria-current="page" href="#">Log In</a>
                    </li>
                    <li class="nav-item ps-1 pe-0">
                        <a class="btn btn-primary-white" aria-current="page" href="#">Sign up </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="container hero">
        <div class="row align-items-center h-90">
            <div class="col-12 col-lg-6">
                <h1>The laravel <br /> Community Forum</h1>
                <p class="mb-4">Empowering th Laravel Community Forum, Share andn learn</p>
                <a href="#" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
                <a href="#" class="btn btn-secondary mb-2 mb-lg-0">Join Disccusscion</a>
            </div>
            <div class="col-12 col-lg-6 h-315px order-first order-lg-last mb-3 mb-lg-0">
                <img class="hero-image float-lg-end" src="{{ url('assets/images/kokomi.png') }}" alt="Backgorund">
            </div>
        </div>
    </section>

    {{-- Promote Banner --}}
    <section class="container min-h-372px">
        <div class="row">
            <div class="col-12 col-lg-4 text-center">
                <img class="promote-icon mb-2" src="{{ url('assets/images/chat.png') }}" alt="Discussions">
                <h2>Discussions</h2>
                <p class="fs-3">3484</p>
            </div>
            <div class="col-21 col-lg-4 text-center">
                <img class="promote-icon mb-2" src="{{ url('assets/images/arrow.png') }}" alt="Answer">
                <h2>Answer</h2>
                <p class="fs-3">5284</p>
            </div>
            <div class="col-21 col-lg-4 text-center">
                <img class="promote-icon mb-2" src="{{ url('assets/images/user.png') }}" alt="user">
                <h2>User</h2>
                <p class="fs-3">5535</p>
            </div>
        </div>
    </section>

    {{-- help Others --}}
    <section class="bg-gray">
        <div class="container py-80px">
            <h2 class="text-center mb-5 ">Help Others</h2>
            <div class="row">
                {{-- Card 1 --}}
                <div class="col-12 col-lg-4 mb-3">
                    <div class="card">
                        <a href="#">
                            <h3> How to add a custom validation in laravel?</h3>
                        </a>
                        <div>
                            <div class="mb-5">
                                <p>
                                    I am working on a blogging application in Laravel 8. There are 4 user roles, among
                                    which, the ...
                                </p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="#"><span
                                                class="badge rounded-pill text-bg-light">Eloquent</span></a>
                                    </div>
                                    <div class="col-5 col-lg-7">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="#" class="me-1">
                                                <img src="{{ url('assets/images/kokomi.png') }}"
                                                    class="avatar rounded-circle" alt="avatar">
                                            </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="#" class="me-1 fw-bold">samssu</a>
                                            <span class="color-gray">7 Hours Ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="col-12 col-lg-4 mb-3">
                    <div class="card">
                        <a href="#">
                            <h3> How to add a custom validation in laravel?</h3>
                        </a>
                        <div>
                            <div class="mb-5">
                                <p>
                                    I am working on a blogging application in Laravel 8. There are 4 user roles, among
                                    which, the ...
                                </p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="#"><span
                                                class="badge rounded-pill text-bg-light">Eloquent</span></a>
                                    </div>
                                    <div class="col-5 col-lg-7">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="#" class="me-1">
                                                <img src="{{ url('assets/images/kokomi.png') }}"
                                                    class="avatar rounded-circle" alt="avatar">
                                            </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="#" class="me-1 fw-bold">samssu</a>
                                            <span class="color-gray">7 Hours Ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="col-12 col-lg-4 mb-3">
                    <div class="card">
                        <a href="#">
                            <h3> How to add a custom validation in laravel?</h3>
                        </a>
                        <div>
                            <div class="mb-5">
                                <p>
                                    I am working on a blogging application in Laravel 8. There are 4 user roles, among
                                    which, the ...
                                </p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="#"><span
                                                class="badge rounded-pill text-bg-light">Eloquent</span></a>
                                    </div>
                                    <div class="col-5 col-lg-7">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="#" class="me-1">
                                                <img src="{{ url('assets/images/kokomi.png') }}"
                                                    class="avatar rounded-circle" alt="avatar">
                                            </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="#" class="me-1 fw-bold">samssu</a>
                                            <span class="color-gray">7 Hours Ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="container min-h-372px d-flex flex-column align-items-center justify-content-center">
        <h2>ready to Contribution?</h2>
        <p class="mb-4">
            want to make a big impact?
            <div class="text-center">
                <a href="#" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
                <a href="#" class="btn btn-secondary mb-2 mb-lg-0">Join Disccusscion</a>
            </div>
        </p>
    </section>

    {{-- Footer --}}
    <footer class="py-80px">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                    <img src="{{ url('assets/images/foruminty-footer.png') }}" alt="Logo" class="h-32px mb-4">
                    <p class="text-white">Empowering the laravel community <br /> to connect. share and learn</p>
                </div>
                <div class="col-12 col-lg-6 me-auto">
                    <div class="d-flex flex-column flex-lg-row justify-content-end">
                        <div class="d-flex flex-column me-140px mb-3 mb-lg-0">
                            <p class="fw-bold fs-5 text-white text flex-nowrap">
                                Contact us</p>
                            <ul class="list-unstyled">
                                <li class="text-white"><a href="mailto:miaw@gmail.com">miaw@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="d-flex flex-column">
                            <p class="fw-bold fs-5 text-white">Links</p>
                            <ul class="list-unstyled">
                                <li class="text-white mb-2"><a href="#">Home</a></li>
                                <li class="text-white mb-2"><a href="#">Discussions</a></li>
                                <li class="text-white mb-2"><a href="#">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>

</html>
