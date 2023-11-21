@extends('client.layouts.app')
@section('title', 'Order')
@section('content')
    <div class="order-container p-lr-100 p-t-30" style="background-color: #f5f5f5">
        <div class="order-address p-tb-40" style="background-color: #fff; border-radius: 10px">
            <div class="up m-l-30 p-b-10">
                <span class="fs-20" style="color: #bf6d72;"><i class="zmdi zmdi-pin p-r-10"></i>Địa chỉ nhận hàng</span>
            </div>
            <div class="down m-l-30">
                <span class="name p-r-10">{{ $user->account_name }}</span>
                <span class="phone p-r-10">{{ $user->phone_number }}</span>
                <span class="address">{{ $user->address }}</span>
            </div>
        </div>
        <div class="product m-t-10 p-tb-40" style="background-color: #fff; border-radius: 10px">
            <div class="m-l-30">
                <table class="scrollable-table">
                    <thead>
                        <tr>
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
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td style="display: flex">
                                <img src="{{ $imageUrl }}" alt="Product Image" width="50">
                                <b>{{ $product->name_product }}</b>
                            </td>
                            <td>{{ $productDetail->color }}</td>
                            <td>{{ $size }}</td>
                            <td>{{ number_format($productDetail->price, 0, ',', ',') }}</td>
                            <td>
                                {{ $quantity }}
                            </td>
                            <td>
                                {{ number_format($productDetail->price * $quantity, 0, ',', ',') }}</td>
                        </tr>
                    </tbody>
                </table>
                {{-- <div class="product-info ">
                    <span class="fs-20">Sản phẩm</span>
                    <span class="p-l-300">Đơn giá</span>
                    <span class="p-l-100">Số lượng</span>
                    <span class="p-l-200">Thành tiền</span>
                </div>
                <div class="mall m-t-20" style="background: #bf6d72; display: inline-block">
                    <span class="p-lr-5 " style="color: #fff; font-weight: 700">Mall</span>
                </div>
                <span class="shop-title">SEASIDE STORE</span>
                <div class="product-detail m-t-30"> 
                    @foreach ($productData['productDetailsWithImages'] as $productDetailWithImages)
                        @foreach ($productDetailWithImages['imageUrls'] as $imageUrl)
                            <img class="img" src="{{ asset($imageUrl) }}" alt="IMG-PRODUCT" style="width: 50px;height:50px">
                            <span class="m-l-10"> {{ $productData['products']->name_product }} </span>
                            @foreach ($productData['size_Product'] as $sizeProduct)
                                <span class="p-l-140">Size: {{ $sizeProduct->id_size }}</span>
                            @endforeach
                            <span class="p-l-50">{{ number_format($productDetailWithImages['productDetail']->price, 0, ',', '.') }} VNĐ</span>
                            <span id="quantity-display" class="p-l-100">1</span>
                            <span class="p-l-230">150.000 VNĐ</span>
                        @endforeach
                    @endforeach    
                </div> --}}
            </div>
        </div>
        <div class="pay m-t-10 p-tb-40" style="background-color: #fff; border-radius: 10px">
            <div class="m-l-30 ">
                <span class="fs-20" style="color: #bf6d72; font-weight: 600">Phương thức thanh toán</span>
                <ul class="nav nav-tabs Payment-delivery p-lr-10 p-tb-10 m-lr-10" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab1" data-toggle="tab" href="#content1">Thanh toán khi nhận
                            hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab2" data-toggle="tab" href="#content2">Thanh toán qua VNPay</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="content1">
                        <h3 class="m-3">Thanh toán khi nhận hàng</h3>
                        <div class="d-flex flex-column align-items-end">
                            <div class="d-flex justify-content-between w-25 my-2 mx-4">
                                <p>Tổng tiền hàng</p>
                                <p>119.000đ</p>
                            </div>
                            <div class="d-flex justify-content-between w-25 my-2 m  x-4">
                                <p>Phí vận chuyển</p>
                                <p>119.000đ</p>
                            </div>
                            <div class="d-flex justify-content-between w-25 my-2 mx-4">
                                <p>Tổng thanh toán</p>
                                <p class="h4 text-danger ">119.000đ</p>
                            </div>
                            <hr />
                            <button
                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 mx-3 trans-04 js-addcart-detail"
                                id="btnCart">
                                Mua ngay
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="content2">
                        <!-- Nội dung của Tab 2 -->
                        <p>VNPay</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
