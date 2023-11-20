<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <title>Deserts</title>
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
    <h1>Deserts</h1>
</header>

<div class="product-container">
    <div class="product">
        <img src="ds1.jpg" alt="Gulab jamun">
        <div class="product-info">
            <p>Gulab jamun</p>
            <p>₹120</p>
            <button onclick="addToCart('Gulab jamun','ds1.jpg','120')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="ds2.jpg" alt="Gajar ka Halwa(Carrot Halwa)">
        <div class="product-info">
            <p>Gajar ka Halwa(Carrot Halwa)</p>
            <p>₹100</p>
            <button onclick="addToCart('Gajar ka Halwa(Carrot Halwa)','ds2.jpg','100')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="ds3.jpg" alt="Kaju katali(Cashew fudge)">
        <div class="product-info">
            <p>Kaju katali(Cashew fudge)</p>
            <p>₹180</p>
            <button onclick="addToCart('Kaju katali(Cashew fudge)','ds3.jpg','180')">Add to Cart</button>
        </div>
    </div>

    <!-- Repeat the above structure for the next set of products -->

    <div class="product">
        <img src="ds4.jpg" alt="rasagulla(white syrup dumplings)">
        <div class="product-info">
            <p>rasagulla(white syrup dumplings)</p>
            <p>₹140</p>
            <button onclick="addToCart('rasagulla(white syrup dumplings)','ds4.jpg','140')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="ds5.jpg" alt="falooda">
        <div class="product-info">
            <p>falooda</p>
            <p>₹190</p>
            <button onclick="addToCart('falooda','ds5.jpg','190')">Add to Cart</button>
        </div>
    </div>

    <div class="product">
        <img src="ds6.jpg" alt="mishti doi(sweet yogurt)">
        <div class="product-info">
            <p>mishti doi(sweet yogurt)</p>
            <p>₹150</p>
            <button onclick="addToCart('mishti doi(sweet yogurt)','ds6.jpg','150')">Add to Cart</button>
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