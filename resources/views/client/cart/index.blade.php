@extends('client.layouts.app')
@section('title', 'Giỏ hàng')
@section('content')
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
                                    <button type="submit">Submit</button>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var quantityButtons = document.querySelectorAll('.quantity-btn');

            quantityButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var cartId = this.getAttribute('data-cart-id');
                    var increment = parseInt(this.getAttribute('data-increment'));
                    updateQuantityAndTotal(cartId, increment);
                });
            });

            function updateQuantityAndTotal(cartId, increment) {
                var quantityElement = document.getElementById('quantity-' + cartId);
                var totalElement = document.getElementById('total-price-' + cartId);
                var priceElement = document.getElementById('price-' + cartId);

                var currentQuantity = parseInt(quantityElement.innerText);
                var newQuantity = currentQuantity + increment;

                // Ensure the new quantity is not less than 1
                newQuantity = Math.max(newQuantity, 1);

                // Update the quantity
                quantityElement.innerText = newQuantity;

                // Get the price from the data attribute
                var price = parseFloat(priceElement.innerText.replace(/,/g, ''));

                // Calculate and update the total price
                var newTotalPrice = price * newQuantity;
                totalElement.innerText = numberFormat(newTotalPrice);
            }

            function numberFormat(number) {
                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            }
        });
    </script>
    <!-- ... Your existing HTML ... -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selectAllCheckbox = document.querySelector('.cart-checkbox[data-cart-id="All"]');
            var checkboxes = document.querySelectorAll('.cart-checkbox');

            selectAllCheckbox.addEventListener('change', function() {
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = selectAllCheckbox.checked;
                });
                updateTotalAmount(); // Update total amount when "Select All" is checked or unchecked
            });

            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    // Uncheck "Select All" if any individual checkbox is unchecked
                    if (!this.checked) {
                        selectAllCheckbox.checked = false;
                    }

                    // Check "Select All" if all individual checkboxes are checked
                    var allChecked = Array.from(checkboxes).every(function(cb) {
                        return cb.checked;
                    });

                    selectAllCheckbox.checked = allChecked;

                    updateTotalAmount
                        (); // Update total amount when an individual checkbox is checked or unchecked
                });
            });
        });

        function buySelected() {
            var selectedCartIds = [];

            // Find all checkboxes that are checked
            var checkboxes = document.querySelectorAll('.cart-checkbox:checked');

            checkboxes.forEach(function(checkbox) {
                // Exclude the "Select All" checkbox from the selectedCartIds array
                if (checkbox.getAttribute('data-cart-id') !== 'All') {
                    selectedCartIds.push(checkbox.getAttribute('data-cart-id'));
                }
            });

            // You can use the selectedCartIds array to perform further actions, such as processing the purchase.
            console.log('Selected Cart IDs:', selectedCartIds);
        }

        function updateTotalAmount() {
            var totalAmount = 0;

            // Find all checkboxes that are checked
            var checkboxes = document.querySelectorAll('.cart-checkbox:checked');

            checkboxes.forEach(function(checkbox) {
                // Exclude the "Select All" checkbox from the calculation
                if (checkbox.getAttribute('data-cart-id') !== 'All') {
                    var cartId = checkbox.getAttribute('data-cart-id');
                    var price = parseFloat(document.getElementById('price-' + cartId).innerText.replace(/,/g, ''));
                    var quantity = parseInt(document.getElementById('quantity-' + cartId).innerText);
                    totalAmount += price * quantity;
                }
            });

            // Display the total amount in the "Tong-tien" element
            document.getElementById('Tong-tien').innerText = numberFormat(totalAmount);
        }

        function numberFormat(number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        }
    </script>

@endsection
