<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main course</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .product {
            width: 30%;
            margin-bottom: 20px;
            position: relative;
            text-align: center;
            transition: transform 0.3s;
        }

        .product img {
            width: 200px; /* Adjust the width as needed */
            height: auto;
            border: 1px solid #ddd; /* Add a border for better visibility */
            border-radius: 5px; /* Optional: Add some border radius */
        }

        .product button {
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 0.2px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<!-- Include this in mens.html -->
<script src="appetizer.js"></script>

<!-- Include this in cart.html -->

<header>
    <h1>Main course</h1>
</header>

<div class="product-container">
    <div class="product">
        <img src="mc1.webp" alt="veg biryani">
        <div class="product-info">
            <p>veg biryani</p>
            <p>₹120</p>
            <button onclick="addToCart('veg biryani','mc1.webp','120')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="mc2.webp" alt="rajma chawal">
        <div class="product-info">
            <p>rajma chawal</p>
            <p>₹100</p>
            <button onclick="addToCart('rajma chawal','mc2.webp','100')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="mc3.webp" alt="bisi bele bath">
        <div class="product-info">
            <p>bisi bele bath</p>
            <p>₹180</p>
            <button onclick="addToCart('bisi bele bath','mc3.webp','180')">Add to Cart</button>
        </div>
    </div>

    <!-- Repeat the above structure for the next set of products -->

    <div class="product">
        <img src="mc4.webp" alt="chana masala">
        <div class="product-info">
            <p>chana masala</p>
            <p>₹140</p>
            <button onclick="addToCart('chana masala','mc4.webp''140')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="mc5.webp" alt="paneer butter masala">
        <div class="product-info">
            <p>paneer butter masala</p>
            <p>₹190</p>
            <button onclick="addToCart('paneer butter masala','mc5.webp','190')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="mc6.webp" alt="khadhi chawal">
        <div class="product-info">
            <p>khadhi chawal</p>
            <p>₹150</p>
            <button onclick="addToCart('khadhi chawal','mc6.webp','150')">Add to Cart</button>
        </div>
    </div>

    <!-- Repeat for the next set of products -->

</div>

<footer>
    <p>© 2023 Indian Spice Heaven. All Rights Reserved.</p>
</footer>

<script src="appetizer.js"></script>
</body>
</html>