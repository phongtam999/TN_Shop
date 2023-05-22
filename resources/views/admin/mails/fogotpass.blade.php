<!DOCTYPE html>
<html>
<head>
    <title>Quên mật khẩu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 100px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }
        
        .btn-back {
            color: #333;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            .btn-back {
            .btn-back {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            color: #007bff;
            border-bottom: 1px solid #007bff;
            width: fit-content;
            margin: 10px auto;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-back:hover {
            color: #0056b3;
            border-color: #0056b3;
}


        }
    </style>
</head>
<body>
    @include('sweetalert::alert')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="card-title">Quên mật khẩu</h4>
                    <form action="{{ route('sendmail') }}"  id="register-form" role="form" autocomplete="off" class="form" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi yêu cầu</button>
                        <a href="{{route('login')}}" class="btn-back">Quay lại</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
