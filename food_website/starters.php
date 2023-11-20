<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starters</title>
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
    <h1>Starters</h1>
</header>

<div class="product-container">
    <div class="product">
        <img src="starters_1.jpg" alt="Chicken spring rolls">
        <div class="product-info">
            <p>Chicken spring rolls</p>
            <p>₹120</p>
            <button onclick="addToCart('Chicken spring rolls','starters_1.jpg','120')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="starters_2.jpg" alt="fish and chicken pakora">
        <div class="product-info">
            <p>fish and chicken pakora</p>
            <p>₹100</p>
            <button onclick="addToCart('fish and chicken pakora','starters_2.jpg','100')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="starters_3.jpg" alt="chilli prawns">
        <div class="product-info">
            <p>chilli prawns</p>
            <p>₹180</p>
            <button onclick="addToCart('Cream of Mushroom Soup','starters_3.jpg','180')">Add to Cart</button>
        </div>
    </div>

    <!-- Repeat the above structure for the next set of products -->

    <div class="product">
        <img src="starters_4.jpg" alt="chicken manchurian">
        <div class="product-info">
            <p>chicken manchurian</p>
            <p>₹140</p>
            <button onclick="addToCart('chicken manchurian','starters_4.jpg','140')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="starters_5.jpg" alt="crispy baked rangoon">
        <div class="product-info">
            <p>crispy baked rangoon</p>
            <p>₹190</p>
            <button onclick="addToCart('crispy baked rangoon','starters_5.jpg','190')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="starters_6.jpg" alt="vegetable cheese omelet">
        <div class="product-info">
            <p>vegetable cheese omelet</p>
            <p>₹150</p>
            <button onclick="addToCart('vegetable cheese omelet','starters_6.jpg','150')">Add to Cart</button>
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