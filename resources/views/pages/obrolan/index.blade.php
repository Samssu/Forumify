@extends('layouts.app')

@section('body')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="mb-4">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <h2 class="mb-4 mb-0">
                        Semua Obrolan
                    </h2>
                    <div>
                        51,864 Obrolan
                    </div>
                </div>
                <a href="#" class="btn btn-primary">Log In to Create Disccusscion</a>
            </div>

            
            <div class="row">
                {{-- card Obrolan 1 --}}
                <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                    <div class="card card-discussions">
                        <div class="row">
                            <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-lg-column align-items-end">
                                <div class="text-nowarp me-2 me-lg-0">
                                    2 Likes
                                </div>
                                <div class="text-nowarp color=gray">
                                    9 Answar
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <a href="{{route('obrolan.show')}}">
                                    <h3>How to add dayat Miaw miaw In Laravel?</h3>
                                </a>
                                <p>
                                    The jQuery script checks whether the password is revealed or not and updates the image
                                    and the password field type accordingly.
                                </p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="#">
                                            <span class="badge rounded-pill text-bg-light">
                                                Eloquent
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-5 col-lg-4">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="#" class="me-1">
                                                <img src="{{ url('assets/images/kokomi.png') }}" alt="SamsuMiaw"
                                                    class="avatar rounded-circle">
                                            </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="#" class="me-1 fw-bold">
                                                Samsu
                                                <span class="color-gray">7 hours Ago</span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- card 2--}}
                    <div class="card card-discussions">
                        <div class="row">
                            <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-lg-column align-items-end">
                                <div class="text-nowarp me-2 me-lg-0">
                                    2 Likes
                                </div>
                                <div class="text-nowarp color=gray">
                                    9 Answar
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <a href="#">
                                    <h3>How to add dayat Miaw miaw In Laravel?</h3>
                                </a>
                                <p>
                                    The jQuery script checks whether the password is revealed or not and updates the image
                                    and the password field type accordingly.
                                </p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="#">
                                            <span class="badge rounded-pill text-bg-light">
                                                Eloquent
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-5 col-lg-4">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="#" class="me-1">
                                                <img src="{{ url('assets/images/kokomi.png') }}" alt="SamsuMiaw"
                                                    class="avatar rounded-circle">
                                            </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="#" class="me-1 fw-bold">
                                                Samsu
                                                <span class="color-gray">7 hours Ago</span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- card 3--}}
                    <div class="card card-discussions">
                        <div class="row">
                            <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-lg-column align-items-end">
                                <div class="text-nowarp me-2 me-lg-0">
                                    2 Likes
                                </div>
                                <div class="text-nowarp color=gray">
                                    9 Answar
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <a href="#">
                                    <h3>How to add dayat Miaw miaw In Laravel?</h3>
                                </a>
                                <p>
                                    The jQuery script checks whether the password is revealed or not and updates the image
                                    and the password field type accordingly.
                                </p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="#">
                                            <span class="badge rounded-pill text-bg-light">
                                                Eloquent
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-5 col-lg-4">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="#" class="me-1">
                                                <img src="{{ url('assets/images/kokomi.png') }}" alt="SamsuMiaw"
                                                    class="avatar rounded-circle">
                                            </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="#" class="me-1 fw-bold">
                                                Samsu
                                                <span class="color-gray">7 hours Ago</span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                {{-- All Category --}}
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <h3>All categories</h3>
                        <div>
                            <a href="#">
                                <span class="badge rounded-pill text-bg-light">
                                    Eloquent
                                </span>
                                <span class="badge rounded-pill text-bg-light">
                                    Facade
                                </span>
                                <span class="badge rounded-pill text-bg-light">
                                    helper
                                </span>
                                
                            </a>
                        </div>
                    </div>
                </div>
     
            </div>
        </div>
    </section>
@endsection
