@extends('layouts.app')

@section('body')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                    <div class="d-flex mb-4">
                        <div class="avatar-wrapper rounded-circle overflow-hidden flex-shrink-0 me-4">
                            <img src="{{ url('assets/images/avatar.png') }}" alt="" class="avatar">
                        </div>
                        <div>
                            <div class="mb-4">
                                <div class="fs-4 fw-bold mb-1 lh-1 text-break">
                                    samssu
                                </div>
                                <div class="color-gray">
                                    Member Since 2 Years ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="text" id="current-url" class="d-none" value="{{request()->url()}}">
                        <a id="share-profile" class="btn btn-primary me-4" href="javascript:;">Share</a>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="mb-5">
                        <h2 class="mb-3">My Discussion</h2>
                        <div>

                            {{-- Card 1 --}}
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

                            {{-- Card 2 --}}
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
                        </div>
                        <div>
                            <div class="mb-3">
                                <h2>My Answers</h2>
                                <div>

                                    {{-- Answer 1 --}}
                                    <div class="card card-discussions" >
                                        <div class="row align-items-center">
                                            <div class="col2 col-lg-1 text-center">
                                                12
                                            </div>
                                            <div class="col">
                                                <span>Replied To</span>
                                                <span class="fw-bold text-primary">
                                                    <a href="#">
                                                         how to add dayat ini the laravel 11?
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Answer2 --}}
                                    <div class="card card-discussions" >
                                        <div class="row align-items-center">
                                            <div class="col2 col-lg-1 text-center">
                                                12
                                            </div>
                                            <div class="col">
                                                <span>Replied To</span>
                                                <span class="fw-bold text-primary">
                                                    <a href="#">
                                                         how to add dayat ini the laravel 11?
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('after-script')
    <script>
        $(document).ready(function() {
            $('#share-profile').click(function() {
                var copytext = $('#current-url');

                copytext[0].select();
                copytext[0].setSelectionRange(0, 99999); 
                navigator.clipboard.writeText(copytext.val());

                var alert = $('#alert');
                alert.removeClass('d-none');

                var alertContainer = alert.find('.container');
                alertContainer.first().text('link to this Discussion Copied Successfully');
            })
        })
    </script>
@endsection