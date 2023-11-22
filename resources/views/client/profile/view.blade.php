@extends('client.profile.index')
<style>
    .form fieldset {
        margin-bottom: 10px;
        border: 1px solid #ccc;
        padding: 10px;
        display: flex;
        margin-left: 50px;
        margin-right: 50px;
        justify-content: space-between;
    }

    fieldset legend {
        font-size: 18px;
        color: #333;
        display: flex;
        justify-content: space-between;
    }

    fieldset div {
        display: flex;
    }

    fieldset div div {
        display: block;
    }

    fieldset div div h5 {
        margin-bottom: 5px;
    }

    fieldset div img {
        height: 120px;
        width: 120px;
    }

    fieldset label {
        display: flex;
        margin-bottom: 5px;
    }

    fieldset label input[type="checkbox"] {
        margin-right: 5px;
    }

    fieldset label input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    fieldset label input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
@section('content1')
    @if(session('ok'))
        <div class="alert alert-success" id="success-alert">
            {{ session('ok') }}
        </div>

        <script>
            setTimeout(function(){
                document.getElementById('success-alert').style.display = 'none';
            }, 3000);
        </script>
    @endif
    <div class="profile-container">
        <h4>Đơn đã mua</h4>
        <div class="separator"></div>
        <div class="form">
            @foreach ($orderDetails as $orderDetail)
                <fieldset>
                    <legend><b>{{ $orderDetail->name_product }}</b>
                        <p>{{ $orderDetail->status }}</p>
                    </legend>
                    <div>
                        <img src="{{ $orderDetail->image }}" alt="">
                        <div>
                            <h5>Kiểu: {{ $orderDetail->color }}</h5>
                            <h5>Size: {{ $orderDetail->size }}</h5>
                            <h5>Số lượng: {{ $orderDetail->quantity }}</h5>
                        </div>
                    </div>
                    <h5>Giá: {{ number_format($orderDetail->price, 0, ',', ',') }} VNĐ</h5>
                    <div>
                        @if ($orderDetail->status == 'Đã giao hàng')
                            <div>
                                <form method="POST" action="{{ route('confirm.received', $orderDetail->id) }}">
                                    @csrf
                                    <button type="submit"
                                        class="flex-c-m stext-101 cl0 bg10 bor1 hov-btn1 p-lr-15 trans-04">
                                        Xác nhận nhận hàng
                                    </button>
                                </form>
                            </div>
                        @else
                            @if ($orderDetail->status == 'Đã nhận hàng')
                                <div>
                                    <a href="{{ route('client.product.detail', ['id' => $orderDetail->product_id]) }}" class="flex-c-m stext-101 cl0  bg10 bor1 hov-btn1 p-lr-15 trans-04">
                                        Mua lại
                                    </a>
                                </div>
                            @else
                                <div>
                                    <label class="flex-c-m stext-101 p-lr-15 trans-04"> Xác nhận nhận
                                        hàng</label>
                                </div>
                            @endif
                        @endif
                    </div>
                </fieldset>
            @endforeach
        </div>
    </div>
@endsection
