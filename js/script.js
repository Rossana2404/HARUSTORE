// Lista de productos disponibles
const products = [
    { id: 1, name: 'Producto 1', price: 10.00 },
    { id: 2, name: 'Producto 2', price: 15.00 },
    { id: 3, name: 'Producto 3', price: 20.00 },
];

// Elementos del carrito
const cartItems = document.getElementById('cart-items');
const cartTotal = document.getElementById('cart-total');
let cart = [];

// Función para agregar un producto al carrito
function addToCart(productId) {
    const product = products.find(item => item.id === productId);
    if (product) {
        cart.push(product);
        renderCart();
    }
}

// Función para renderizar el carrito
function renderCart() {
    cartItems.innerHTML = '';
    let total = 0;

    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.name}: $${item.price.toFixed(2)}`;
        cartItems.appendChild(li);
        total += item.price;
    });

    cartTotal.textContent = `$${total.toFixed(2)}`;
}
