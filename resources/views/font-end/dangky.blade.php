<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post" action="{{ route('dangky') }}">
                        @csrf

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input class="form-control form-control-lg" type="email" placeholder="Email" name="email" required />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input class="form-control form-control-lg" type="password" placeholder="Password" name="password" required />
                        </div>

                        <div class="form-outline mb-2">
                            <input class="form-control form-control-lg" type="text" placeholder="Name" name="name" required />
                        </div>

                        <div class="form-outline mb-2">
                            <input class="form-control form-control-lg" type="text" placeholder="UserCode" name="usercode" required />
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-1">
                            <button class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng ký</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Bạn đã có tài khoản? <a href="{{route('dangnhap')}}" class="link-danger">Đăng nhập ngay</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>