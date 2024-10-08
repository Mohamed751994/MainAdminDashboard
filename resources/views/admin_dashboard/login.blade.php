<!doctype html>
<html lang="en" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('admin_dashboard/assets/images/logo.png')}}" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('admin_dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_dashboard/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_dashboard/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_dashboard/assets/css/icons.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{asset('admin_dashboard/assets/css/pace.min.css')}}" rel="stylesheet" />

    <title> Kits Technology | تسجيل الدخول</title>
</head>

<body>

<!--start wrapper-->
<div class="wrapper">

    <!--start content-->
    <main class="authentication-content">
        <div class="container-fluid">
            <div class="authentication-card">
                <div class="card shadow rounded-0 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                            <img src="{{asset('admin_dashboard/assets/images/error/login-img.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body p-4 p-sm-5">
                                <img src="{{asset('admin_dashboard/assets/images/logo.png')}}" class="login-logo img-fluid" alt="">
                                <h5 class="card-title mb-3">تسجيل الدخول | لوحة تحكم الأدمن</h5>
                                @include('errors.validation_error')
                                <form class="form-body" method="post" action="{{route('admin.login')}}">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">البريد الالكتروني</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                                <input type="email" class="form-control radius-30 ps-5" required name="email" id="inputEmailAddress" placeholder="ادخل البريد الالكتروني">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">كلمة المرور</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" name="password" required class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="ادخل كلمة المرور">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">تذكرني</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary radius-30">تسجيل الدخول</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--end page main-->

</div>
<!--end wrapper-->


<!--plugins-->
<script src="{{asset('admin_dashboard/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin_dashboard/assets/js/pace.min.js')}}"></script>


</body>

</html>
