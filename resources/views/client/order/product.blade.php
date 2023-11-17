@extends('client.layouts.app')
@section('title', 'Order')
@section('content')
    <div class="order-container p-lr-100 p-t-30" style="background-color: #f5f5f5">
        <div class="order-address p-tb-40" style="background-color: #fff; border-radius: 10px">
            <div class="up m-l-30 p-b-10">
              <span class="fs-20" style="color: #bf6d72;"><i class="zmdi zmdi-pin p-r-10"></i>Địa chỉ nhận hàng</span>
            </div>
            <div class="down m-l-30">
              <span class="name p-r-10">Phạm Dgoon</span>
              <span class="phone p-r-10">0866920451</span>
              <span class="address">Hải Châu, Đà Nẵng</span>
            </div>
        </div>
        <div class="product m-t-10 p-tb-40" style="background-color: #fff; border-radius: 10px">
          <div class="m-l-30">
            <div class="product-info ">
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
              @foreach ($productDetailsWithImages as $productDetailWithImages)
                @foreach ($productDetailWithImages['imageUrls'] as $imageUrl)
                  <img class="img" src="{{ asset($imageUrl) }}" alt="IMG-PRODUCT" style="width: 50px;height:50px">
                  <span class="m-l-10"> {{ $products->name_product }} </span>
                  @foreach ($size_Product as $sizeProduct)
                    <span class="p-l-150">Size: {{ $sizeProduct->id_size }}</span>
                  @endforeach
                  <span class="p-l-90">{{ number_format($productDetailWithImages['productDetail']->price, 0, ',', '.') }} VNĐ</span>
                  <span class="p-l-100">1</span>
                  <span class="p-l-230">150.000 VNĐ</span>
                @endforeach
              @endforeach
            </div>
          </div>
        </div>
        <div class="pay m-t-10 p-tb-40" style="background-color: #fff; border-radius: 10px">
          <div class="m-l-30 ">
            <span class="fs-20" style="color: #bf6d72; font-weight: 600">Phương thức thanh toán</span>
            <div class="Payment-delivery p-lr-10 p-tb-10 m-lr-10" style="border: 1px solid #ccc; display: inline-block">
              <span>Ví VNpay</span>
            </div>
            <div class="Payment-delivery p-lr-10 p-tb-10" style="border: 1px solid #ccc; display: inline-block">
              <span>Thanh toán khi nhận hàng</span>
            </div>
          </div>
        </div>
    </div>
@endsection
