<style>
    .box {

        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 20px;
    }

    .product {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
        display: flex;
    }

    .product img {
        max-width: 100%;
        height: auto;
        max-height: 150px;
        margin-right: 20px;
    }

    .product-details {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .product-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .product-price {
        color: #007bff;
        margin-bottom: 5px;
    }

    .product-size {
        color: #777;
        margin-bottom: 5px;
    }

    .quantity {
        display: flex;
        align-items: center;
    }

    .quantity input {
        width: 40px;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 3px;
        padding: 5px;
        margin: 0 5px;
    }

    .remove-button {
        background-color: #dc3545;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .remove-button:hover {
        background-color: #c82333;
    }

    .checkout-section {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
    }

    .checkout-section h2 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .checkout-section input[type="submit"] {
        background-color: #000;
        color: #fff;
        padding: 15px 40px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .checkout-section input[type="submit"]:hover {
        background-color: #333;
    }
</style>

<div class="box container">
    <div class="checkout-items">
        <div class="product" id="product1">
            <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/322696f42553436b8017b15c9b9f1fc0_9366/Mexico_2024_Home_Authentic_Jersey_Multicolor_IP6379_HM1.jpg" alt="Product 1">
            <div class="product-details">
                <div class="product-title">MEXICO 2024 HOME AUTHENTIC JERSEY</div>
                <div class="product-price">$150</div>
                <div class="quantity">
                    <!-- <div>Size:
                        <select onchange="updateTotal()">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L" selected>L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div> -->
                    <div>Quantity:
                        <!-- <input type="number" value="1" min="1" onchange="updateTotal()"> -->
                        <span style="margin:0 3rem;">1</span>
                        <button class="remove-button">Remove</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="product" id="product2">
            <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/c60cd4a11b6945599e15a81a017fb25f_9366/Samba_Classic_Black_034563_01_standard.jpg" alt="Product 2">
            <div class="product-details">
                <div class="product-title">Product 2</div>
                <div class="product-price">$90</div>
                <div class="quantity">
                    <!-- <div>Size:
                        <select onchange="updateTotal()">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L" selected>L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div> -->
                    <div>Quantity:
                        <!-- <input type="number" value="1" min="1" onchange="updateTotal()"> -->
                        <span style="margin:0 3rem;">1</span>
                        <button class="remove-button">Remove</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="checkout-section">
        <h2>Total Price</h2>
        <p id="totalPrice" style="margin:2rem 0;">$0.00</p>
        <input type="submit" value="Buy Now">
    </div>
</div>

<script>
    function updateTotal() {
        var product1Price = parseFloat(document.getElementById('product1').querySelector('.product-price').textContent.replace('$', ''));
        var product1Quantity = parseInt(document.getElementById('product1').querySelector('input[type="number"]').value);
        var product2Price = parseFloat(document.getElementById('product2').querySelector('.product-price').textContent.replace('$', ''));
        var product2Quantity = parseInt(document.getElementById('product2').querySelector('input[type="number"]').value);

        var totalPrice = (product1Price * product1Quantity) + (product2Price * product2Quantity);

        document.getElementById('totalPrice').textContent = '$' + totalPrice.toFixed(2);
    }
</script>