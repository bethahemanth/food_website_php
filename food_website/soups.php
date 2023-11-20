<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soups</title>
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
    <h1>Soups</h1>
</header>

<div class="product-container">
    <div class="product">
        <img src="soup_1.jpg" alt="Butternut Squash Soup">
        <div class="product-info">
            <p>Butternut Squash Soup</p>
            <p>₹120</p>
            <button onclick="addToCart('Butternut Squash Soup','soup_1.jpg','120')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="soup_2.jpg" alt="Creamy Wild Rice Soup">
        <div class="product-info">
            <p>Creamy Wild Rice Soup</p>
            <p>₹100</p>
            <button onclick="addToCart('Creamy Wild Rice Soup','soup_2.jpg','100')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="soup_3.jpg" alt="Cream of Mushroom Soup">
        <div class="product-info">
            <p>Cream of Mushroom Soup</p>
            <p>₹180</p>
            <button onclick="addToCart('Cream of Mushroom Soup','soup_3.jpg','180')">Add to Cart</button>
        </div>
    </div>

    <!-- Repeat the above structure for the next set of products -->

    <div class="product">
        <img src="soup_4.jpg" alt="Potato Leek Soup">
        <div class="product-info">
            <p>Potato Leek Soup</p>
            <p>₹140</p>
            <button onclick="addToCart('Potato Leek Soup','soup_4.jpg','140')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="soup_5.jpg" alt="Broccoli Cheddar Soup">
        <div class="product-info">
            <p>Broccoli Cheddar Soup</p>
            <p>₹190</p>
            <button onclick="addToCart('Broccoli Cheddar Soup','soup_5.jpg','190')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="soup_6.jpg" alt="Smoky, Spicy Soups and Chilis">
        <div class="product-info">
            <p>Smoky, Spicy Soups and Chili's</p>
            <p>₹150</p>
            <button onclick="addToCart('Smoky, Spicy Soups and Chilis','soup_6.jpg','150')">Add to Cart</button>
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