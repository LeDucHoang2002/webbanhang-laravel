
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