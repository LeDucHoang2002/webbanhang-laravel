<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác thực email</title>
</head>
<body>
    <h2>Xác thực email</h2>

    <p>Cảm ơn bạn đã đăng ký! Để bắt đầu, bạn vui lòng xác thực địa chỉ email của mình.</p>
    <a href="{{ URL::to('/email/verify/' . $user->email_verification_token) }}">
        Click vào đây để xác thực
    </a>
    <p>Cảm ơn,</p>
    <p>SEASIDE STORE</p>
</body>
</html>
