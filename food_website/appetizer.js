// script.js

function addToCart(productName, image, price) {
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    let existingItem = cartItems.find(item => item.name === productName);

    if (!existingItem) {
        cartItems.push({ name: productName, image: image, price: price });
        localStorage.setItem('cartItems', JSON.stringify(cartItems));

        // Send the data to the server to store in the database
        sendDataToServer(productName, price);

        alert('Item added to cart!');
    } else {
        alert('Item is already in the cart!');
    }
}

function sendDataToServer(productName, price) {
    // Prepare the data to be sent to the server
    const data = {
        name: productName,
        price: price
    };

    // Make a POST request to store.php using fetch API
    fetch('store.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
        .then(response => {
            if (response.ok) {
                return response.text();
            }
            throw new Error('Network response was not ok.');
        })
        .then(data => {
            console.log(data); // Display the response from store.php
            // You can perform additional actions after successful storage if needed
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

