@extends('client.profile.index')
<style>
    .profile-container {
        width: 100%;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    h2 {
        color: #333;
    }

    .separator {
        border-top: 1px solid #efefef;
        margin: 20px 0;
    }

    label {
        margin: 10px;
    }

    .input {
        margin-left: 20px;
        width: 300px;
        border: 1px solid #efefef;
        padding: 8px;
        margin-bottom: 10px;
    }

    .input-wrapper {
        position: relative;
        display: inline-block;
    }

    .input+.toggle-password {
        position: absolute;
        right: 10px;
        /* Điều chỉnh khoảng cách từ biểu tượng đến ô nhập */
        top: 50%;
        transform: translateY(-80%);
        cursor: pointer;
    }

    .checkbox {
        margin-left: 20px;
        width: 300px;
        padding: 8px;
        margin-bottom: 10px;
        padding-right: 10%;
    }

    select {
        padding: 8px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    .layout {
        width: 100%;
        display: flex;
    }

    /* .layout-left {
        display: flex;
        width: 50%;
        justify-content: right;
    } */

    .layout-left {
        display: flex;
        flex-direction: column;
        /* Sắp xếp các phần tử theo chiều dọc */
        width: 50%;
    }

    .layout-left form {
        display: flex;
        flex-direction: column;
    }

    .layout-left form button {
        align-self: flex-end;
        margin-top: 10px;
    }

    .layout-left div {
        display: flex;
        justify-content: right;
    }

    .layout-right {
        width: 48%;
        justify-content: center;
        align-content: center;
        display: flex;
        margin-left: 30px;
        border-left: 1px solid #efefef;
        height: 200px;
    }

    .image-upload {
        text-align: center;
        margin-top: 20px;
    }

    #profile-image {
        width: 150px;
        height: 150px;
        margin-top: 10px;
        border-radius: 100px;
        border-left: 1px solid #efefef;
    }
</style>
@section('content1')
    <div class="profile-container">
        <h4>Đổi mật khẩu</h4>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="separator"></div>
            <div class="layout-left">
                <!-- Add the following form to your Blade view -->
                <form method="post" action="{{ route('update.password') }}">
                    @csrf
                    <div class="input-wrapper">
                        <label for="pass_old">Nhập mật khẩu cũ:</label>
                        <input class="input" type="password" id="pass_old" name="pass_old" required>
                        <i id="togglePassword_old" class="fas fa-regular fa-eye-slash toggle-password"></i>
                    </div>

                    <div class="input-wrapper">
                        <label for="pass_new">Nhập mật khẩu mới:</label>
                        <input class="input" type="password" id="pass_new" name="pass_new" required>
                        <i id="togglePassword_new" class="fas fa-regular fa-eye-slash toggle-password"></i>
                    </div>

                    <div class="input-wrapper">
                        <label for="pass_new_confirm">Nhập lại mật khẩu mới:</label>
                        <input class="input" type="password" id="pass_new_confirm" name="pass_new_confirm" required>
                        <i id="togglePassword_confirm" class="fas fa-regular fa-eye-slash toggle-password"></i>
                    </div>

                    <button class="m-t flex-c-m stext-101 cl0  bg10 bor4 hov-btn1 p-lr-15 trans-04" type="submit">Lưu thay đổi</button>
                </form>
            </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword_old = document.getElementById('togglePassword_old');
        const password_oldInput = document.getElementById('pass_old');

        togglePassword_old.addEventListener('click', function() {
            togglePasswordVisibility(password_oldInput, togglePassword_old);
        });

        const togglePassword_new = document.getElementById('togglePassword_new');
        const password_newInput = document.getElementById('pass_new');

        togglePassword_new.addEventListener('click', function() {
            togglePasswordVisibility(password_newInput, togglePassword_new);
        });

        const togglePassword_confirm = document.getElementById('togglePassword_confirm');
        const confirmPasswordInput = document.getElementById('pass_new_confirm');

        togglePassword_confirm.addEventListener('click', function() {
            togglePasswordVisibility(confirmPasswordInput, togglePassword_confirm);
        });
    });

    function togglePasswordVisibility(inputElement, eyeIcon) {
        const type = inputElement.getAttribute('type') === 'password' ? 'text' : 'password';
        inputElement.setAttribute('type', type);
        eyeIcon.classList.toggle('active');

        // Toggle eye icon
        if (type === 'password') {
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
</script>
