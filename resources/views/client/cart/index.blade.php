@extends('client.layouts.app')
@section('title', 'Giỏ hàng')
@section('content')
<nav>
    <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a  href="{{ route('client.home') }}">
                <p>Trang chủ</p>
            </a></li>
        <li class="breadcrumb-item " aria-current="page">Giỏ hàng</li>
    </ol>
</nav>
    <div>
        @if (count($carts) > 0)
            <table>
                <thead>
                    <tr>
                        <th><input type="checkbox" class="cart-checkbox" data-cart-id="All"></th>
                        <th>ID</th>
                        <th>Sản phẩm</th>
                        <th>Kiểu sản phẩm</th>
                        <th>Size</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($carts as $cart)
                        <tr>
                            <td>
                                <input type="checkbox" class="cart-checkbox" data-cart-id="{{ $cart->id }}">
                            </td>
                            <td>{{ $count++ }}</td>
                            <td style="display: flex">
                                <img src="{{ $cart->image_product }}" alt="Product Image" width="50">
                                <b>{{ $cart->name_product }}</b>
                            </td>
                            <td>{{ $cart->color }}</td>
                            <td>{{ $cart->id_size }}</td>
                            <td id="price-{{ $cart->id }}">{{ number_format($cart->price, 0, ',', ',') }}</td>
                            <td>
                                <button class="quantity-btn" data-cart-id="{{ $cart->id }}"
                                    data-increment="-1">-</button>
                                <span class="quantity " id="quantity-{{ $cart->id }}">{{ $cart->quantity }}</span>
                                <button class="quantity-btn" data-cart-id="{{ $cart->id }}"
                                    data-increment="1">+</button>
                            </td>
                            <td id="total-price-{{ $cart->id }}">
                                {{ number_format($cart->price * $cart->quantity, 0, ',', ',') }}</td>
                            <td>
                                <form method="POST" action="{{ route('remove.cart.item', ['id' => $cart->id]) }}">
                                    @csrf
                                    <!-- Rest of your form elements -->
                                    <button class=" cl0 bg10 bor1 hov-btn1 p-lr-15" type="submit">X</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Giỏ hàng của bạn đang trống.</p>
        @endif
    </div>
    <div class="buy-button-container">
        <span style="display: flex"><b>Tổng tiền: </b>
            <p id="Tong-tien"> </p>VNĐ
        </span>
        <button type="button" class="flex-c-m stext-101 cl0 size-101 bg1 bor3 hov-btn1 p-lr-15 trans-04 fl-r"
            onclick="buySelected()">
            Mua ngay
        </button>
    </div>
@endsection
