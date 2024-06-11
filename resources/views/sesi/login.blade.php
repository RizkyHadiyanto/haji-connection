<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login - BSI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Favicons -->
    <link href="assets/img/favicon2.png" rel="icon">
    <link href="assets/img/apple-touch-icon2.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center"></div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="gambar"></div>
                        {{-- href="/login/login" --}}
                        {{-- <img src="{{ asset('img/logojpeg.jpg') }}" > --}}
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                            </div>
                            @if(session('errors'))
                                <div class="alert alert-danger">
                                    {{ session('errors') }}
                                </div>
                            @endif
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            {{-- // value="{{ Session::get('name')}}" --}}
                            <form action="/sesi/login" method="POST">
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="name" name="name" class="form-control" id="name" required />
                                    <label class="form-control-placeholder  " for="name">Username</label>
                                    <span toggle="#password-field"
                                        class="fa fa-user field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password-field" class="form-control"
                                        required>
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field"
                                        class="fa fas fa-lock field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button name="submit" type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/login.min.js') }}"></script>

    {{-- <script src="js/jquery.min.js"></script> --}}
    {{-- <script src="js/popper.js"></script> --}}
    {{-- <script src="js/bootstrap.min.js"></script> --}}
    {{-- <script src="js/main.js"></script> --}}

</body>

</html>
