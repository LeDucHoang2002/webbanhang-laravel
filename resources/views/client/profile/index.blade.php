<!-- Page Header Start -->
@extends('client.layouts.app')
@section('title', 'Trang cá nhân')

<link rel="stylesheet" type="text/css" href="css/profile.css">
@section('content')
    <div style="display: flex">
        @php
            $user = \App\Models\User::where('username', session('username'))->first();
        @endphp
        <nav class="nav">
            <div class="profile-image">
                <img id="image" src="{{ $user->avt }}" alt="">
                <h5>{{$user->account_name}}</h5>
            </div>
            
            <div class="separator"></div>
            <a href="{{ url('/profile') }}">Hồ Sơ</a>
            <a href="{{ url('/password') }}">Đổi Mật Khẩu</a>
            <a href="{{ url('/view') }}">Đơn mua</a>
            <a href="{{ url('/settings') }}">Cài Đặt Thông Báo</a>
        </nav>

        <section>
            @yield('content1')
        </section>
    </div>

@endsection
