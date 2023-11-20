<html>
<head>
    <style>
        /* Define the style for the buttons */
        body
        {
            background-color:#eebb99 ;
        }
        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            padding-top: 20px;
        }

        /* Use different colors for different buttons */
        .button1 {background-color: #4CAF50;} /* Green */
        .button2 {background-color: #FFC107;} /* Yellow */

        /* Center the buttons in the page */
        .button-container {
            text-align: center;
        }
        .space
        {
            padding-bottom: 300px;
        }
    </style>
</head>
<body>

<!-- Wrap the buttons in a div element with the class button-container -->
<div class="space">

</div>
<div class="button-container">
    <button class="button button1" onclick="window.location.href='table_booking.html'">Book a table</button>
    <button class="button button2" onclick="window.location.href='menu.html'">Catering</button>
</div>

</body>
</html>
