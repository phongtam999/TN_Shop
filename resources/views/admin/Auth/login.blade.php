<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <style>
        .login-form h4 {
    color: #4c00ff; /* Thay đổi màu chữ thành #4c00ff */
    font-weight: bold;
    font-size: 28px; /* Thay đổi kích thước chữ thành 28px */
    margin-bottom: 30px;
    text-align: center;
}

        body {
            background-color: #f1f1f1;
        }
    
        .login-form-bg {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    
        .login-form {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
    
        .login-form h4 {
            color: #ff0000; /* Màu sắc của tiêu đề */
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 30px;
            text-align: center;
        }
    
        .login-form .form-control {
            border-radius: 5px;
        }
    
        .login-form button.form-control {
            background-color: #002bff;
            color: #fff;
            font-weight: bold;
            font-size: 18px;
            border-radius: 5px;
        }
    
        .login-form__footer {
            text-align: center;
        }
    
        .login-form__footer a {
            color: #ff0000; /* Màu sắc của liên kết Đăng ký */
        }
    .error-message {
        color: #ff0000;
        margin-top: 10px;
    }
    .login-form .form-group {
    position: relative; /* Thêm thuộc tính position relative để tạo khung cho validation */
}

.login-form .form-group input[type="email"],
.login-form .form-group input[type="password"] {
    font-size: 18px;
    border-radius: 20px;
    padding: 15px;
    border: 2px solid #4c00ff; /* Thêm đường viền input rõ đậm */
}

.login-form .invalid-feedback strong {
    font-size: 15px;
    color: #ff0000; /* Màu chữ cho thông báo lỗi */
    position: absolute; /* Thêm thuộc tính position absolute để di chuyển validation */
    bottom: -20px; /* Điều chỉnh vị trí dưới của validation */
    left: 0; /* Điều chỉnh vị trí trái của validation */
}

.login-form .form-group {
    margin-bottom: 20px;
}


.login-form-bg {
    display: flex;
    justify-content: flex-end; /* Thay đổi justify-content-start thành justify-content-end */
    align-items: center;
}

.col-xl-6 {
    max-width: 500px; /* Thêm giới hạn độ rộng cho cột */
    width: 100%;
}

.card-body {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100%;
}

.login-input {
  max-width: 400px; /* Thêm giới hạn độ rộng cho phần nhập liệu */
  width: 100%;
}

.login-form__footer {
  text-align: center;
}

.login-form__footer a {
  color: #ff0000; /* Màu sắc của liên kết Đăng ký */
}





    </style>
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!-- admin.Auth.login.blade.php -->

<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-end h-100">
            <div class="col-xl-6 col-lg-8 col-md-10 text-right">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href="{{route('login')}}">
                                <h4 style="color: #4c00ff; font-size: 28px;">Đăng Nhập</h4> <!-- Thêm font-size: 28px; vào inline style -->
                            </a>
                            <form class="mt-5 mb-5 login-input" action="{{ route('checkLogin') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Tên đăng nhập hoặc Email" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mật khẩu" name="password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <button class="form-control" type="submit">Đăng nhập</button>
                            </form>
                            <p class="mt-5 login-form__footer">
                                <a href="page-register.html" class="text-primary">Bạn quên mật khẩu ư?</a>
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('assets/plugins/common/common.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.min.js')}}"></script>
    <script src="{{ asset('assets/js/settings.js')}}"></script>
    <script src="{{ asset('assets/js/gleek.js')}}"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js')}}"></script>
</body>
</html>
