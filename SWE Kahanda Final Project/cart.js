// Get cart from sessionStorage
function getCart() {
    return JSON.parse(sessionStorage.getItem('cart')) || [];
}

// Save cart to sessionStorage
function saveCart(cart) {
    sessionStorage.setItem('cart', JSON.stringify(cart));
}

// Add item to cart
function addToCart(name, price, image) {
    var cart = getCart();
    cart.push({ name: name, price: price, image: image });
    saveCart(cart);
    updateCartCount();
    alert(name + ' has been added to your cart!');
}

// Update cart count in header
function updateCartCount() {
    var cart = getCart();
    var countElement = document.getElementById('cart-count');
    if (countElement) {
        countElement.textContent = cart.length;
    }
}

// Remove item from cart by index
function removeFromCart(index) {
    var cart = getCart();
    cart.splice(index, 1);
    saveCart(cart);
    displayCart();
    updateCartCount();
}

// Display cart items on cart page
function displayCart() {
    var cart = getCart();
    var cartItems = document.getElementById('cart-items');
    var cartTotal = document.getElementById('cart-total');

    if (!cartItems) return;

    if (cart.length === 0) {
        cartItems.innerHTML = '<p class="empty-cart">Your cart is empty.</p>';
        cartTotal.textContent = '$0.00';
        return;
    }

    var html = '';
    var total = 0;

    for (var i = 0; i < cart.length; i++) {
        var item = cart[i];
        var priceNum = parseFloat(item.price.replace('$', ''));
        total += priceNum;

        html += '<div class="cart-item">';
        html += '<img src="' + item.image + '" alt="' + item.name + '">';
        html += '<div class="cart-item-info">';
        html += '<h3>' + item.name + '</h3>';
        html += '<p>' + item.price + '</p>';
        html += '</div>';
        html += '<button onclick="removeFromCart(' + i + ')" class="remove-btn">Remove</button>';
        html += '</div>';
    }

    cartItems.innerHTML = html;
    cartTotal.textContent = '$' + total.toFixed(2);
}

// Update count on page load
document.addEventListener('DOMContentLoaded', function() {
    updateCartCount();
});
