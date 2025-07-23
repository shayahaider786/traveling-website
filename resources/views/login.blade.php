<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- MDB CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.min.css" rel="stylesheet" />
    <title>Login</title>
</head>

<body>
    <section class="vh-100" style="background-color: #EF6724 !important;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            {{-- <h3 class="mb-5">Sign in</h3> --}}
                            <img src="frontend/img/logo.png" alt="" width="50%">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="email" id="typeEmailX-2" name="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" required autofocus />
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                    @error('email')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="password" id="typePasswordX-2" name="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        required autocomplete="current-password" />
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    @error('password')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input class="form-check-input" type="checkbox" name="remember" id="form1Example3"
                                        {{ old('remember') ? 'checked' : '' }} />
                                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                                </div>

                                <button data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-secondary btn-lg btn-block" type="submit">Login</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MDB JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.min.js"></script>
</body>

</html>
