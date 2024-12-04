@extends('layouts.auth')

@section('body')
    <section class="bg-grey vh-100">
        <div class="container h-100 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-3">
                    <a href="#" class="nav-link mb-5 text-center">
                        <img class="h-32px" src="{{ url('assets/images/foruminty-footer.png') }}" alt="logo">
                    </a>
                    <div class="card mb-5 bg-light">
                        <form action="#">
                            <div class="mb-5">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="miawmiaw@example.com"
                                    autocomplete="off" autofocus>
                            </div>
                            <div class="mb-5">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control border-end-0 pe-0 rounded-0 rounded-start"
                                        id="password" name="password">
                                    <span class="input-group-text bg-white border-start-0 pe-auto">
                                        <a href="javascript:;" id="password-toggle">
                                            <img src="{{ url('assets/images/eye-slash.png') }}" alt="password"
                                                id="password-toggle-img">
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary rounded-2">login</button>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        Don't have an account? <a href="#" class="text-underline"><u>Sign Up</u></a>
                    </div>
                </div>
            </div>
    </section>
@endsection

@section('after-script')
    <script>
        var isPasswordRevealed = false;

        $('#password-toggle').on('click', function() { // Added the function() parameter here
            isPasswordRevealed = !isPasswordRevealed;

            if (isPasswordRevealed) {
                $('#password-toggle-img').attr('src', "{{ url('assets/images/eye.png') }}");
                $('#password').attr('type', 'text');
            } else {
                $('#password-toggle-img').attr('src',
                "{{ url('assets/images/eye-slash.png') }}"); // Fixed typo here
                $('#password').attr('type', 'password');
            }
        });
    </script>
@endsection
