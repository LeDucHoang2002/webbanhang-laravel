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
        <div class="container b-container" id="b-container">
            <div class="form" id="b-form">
                <!-- Use appropriate route for registration -->
                <h2 class="form_title title">Tạo tài khoản</h2>
                <span class="form__span">or use email for registration</span>
                <input class="form__input" type="text" name="name" placeholder="Name">
                <input class="form__input" type="text" name="email" placeholder="Email">
                <input class="form__input" type="password" name="password" placeholder="Password">
                <button class="form__button button ">ĐĂNG KÝ</button>
            </div>
        </div>


        <div class="switch" id="switch-cnt">
            <div class="switch__circle switch__circle--t"></div>
            <div class="switch__container" id="switch-c1">
                <h4 class="switch__title title">Đã có tài khoản!</h4>
                <p class="switch__description description">Vui lòng đăng nhập với tài khoản cá nhân của bạn</p>
                <a class="switch__button button switch-btn" href="{{ route('login') }}">ĐĂNG NHẬP</a>
            </div>

        </div>
    </div>
</body>

</html>