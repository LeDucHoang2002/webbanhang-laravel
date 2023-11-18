<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/login-register-styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        <div class="container a-container" id="a-container">
            <form class="form" id="a-form" method="POST" action="{{ route('login') }}">
                @csrf <!-- Add this for Laravel CSRF protection -->
                <h2 class="form_title title">Đăng nhập</h2>
                <span class="form__span">or use your email account</span>
                <span class="form__span">
                    @if (session('fail'))
                        <div class="alert alert-danger">
                            {{ session('fail') }}
                        </div>
                    @endif
                </span>
                <input class="form__input" type="text" id="username1" name="username" placeholder="Tên đăng nhập"
                    required>
                <!-- Add the 'required' attribute above -->
                <input class="form__input" type="password" id="password1" name="password" placeholder="Mật khẩu"
                    required>
                <!-- Add the 'required' attribute above -->
                <a class="form__link" href="#">Bạn quên mật khẩu?</a>
                <button class="form__button button" type="submit">ĐĂNG NHẬP</button>
            </form>
        </div>

        <div class="switch" id="switch-cnt">

            <div class="switch__container " id="switch-c2">
                <h2 class="switch__title title">Tạo tài khoản !</h2>
                <p class="switch__description description">Vui lòng đăng ký thông tin cá nhân của bạn để bắt đầu với
                    chúng tôi</p>
                <a class="switch__button button switch-btn" href="{{ route('register') }}">ĐĂNG KÝ</a>
            </div>
        </div>
    </div>
</body>
</html>
