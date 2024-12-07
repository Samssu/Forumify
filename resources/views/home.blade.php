@extends('layouts.app')

@section('body')
   
    {{-- Hero Section --}}
    <section class="container hero">
        <div class="row align-items-center h-90">
            <div class="col-12 col-lg-6">
                <h1>The laravel <br /> Community Forum</h1>
                <p class="mb-4">Empowering th Laravel Community Forum, Share andn learn</p>
                <a href="{{route('auth.sign-up.show')}}" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
                <a href="{{route('obrolan.index')}}" class="btn btn-secondary mb-2 mb-lg-0">Join Disccusscion</a>
            </div>
            <div class="col-12 col-lg-6 h-315px order-first order-lg-last mb-3 mb-lg-0">
                <img class="hero-image float-lg-end" src="{{ url('assets/images/foto.jpg') }}" alt="Backgorund">
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
                <a href="{{route('auth.sign-up.show')}}" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
                <a href="{{route('obrolan.index')}}" class="btn btn-secondary mb-2 mb-lg-0">Join Disccusscion</a>
            </div>
        </p>
    </section>

@endsection