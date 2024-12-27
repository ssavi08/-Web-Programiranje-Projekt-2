// Selectors
const cartIcon = document.getElementById("cart-icon");
const cartDrawer = document.getElementById("cart-drawer");
const closeCartButton = document.getElementById("close-cart");
const cartItemsContainer = document.getElementById("cart-items");
const totalPriceElement = document.getElementById("total-price");

let cart = [];

// Open Cart Drawer
cartIcon.addEventListener("click", () => {
    cartDrawer.classList.add("open");
});

// Close Cart Drawer
closeCartButton.addEventListener("click", () => {
    cartDrawer.classList.remove("open");
});

// Add Item to Cart
function addToCart(name, price) {
    const existingItem = cart.find(item => item.name === name);
    if (existingItem) {
        existingItem.quantity++;
    } else {
        cart.push({ name, price, quantity: 1 });
    }
    updateCart();
}

// Updated Add-to-Cart Functionality
document.querySelectorAll(".add-to-cart").forEach(button => {
    button.addEventListener("click", event => {
        const category = event.target.closest(".category");
        const name = category.dataset.name;
        const price = parseFloat(category.dataset.price);

        addToCart(name, price);
    });
});

// Add Item to Cart
function addToCart(name, price) {
    const existingItem = cart.find(item => item.name === name);
    if (existingItem) {
        existingItem.quantity++;
    } else {
        cart.push({ name, price, quantity: 1 });
    }
    updateCart();
    popCartIcon();
}

function popCartIcon() {
    cartIcon.classList.add('pop');
    setTimeout(() => {
        cartIcon.classList.remove('pop');
    }, 300);
}

// Update Cart
function updateCart() {
    cartItemsContainer.innerHTML = "";
    let totalPrice = 0;

    cart.forEach(item => {
        totalPrice += item.price * item.quantity;

        const cartItem = document.createElement("div");
        cartItem.classList.add("cart-item");

        cartItem.innerHTML = `
            <span>${item.name}</span>
            <div>
                <button class="quantity-btn decrease">-</button>
                <span>${item.quantity}</span>
                <button class="quantity-btn increase">+</button>
                <span class="price">${(item.price * item.quantity).toFixed(2)} €</span>
                <button class="remove-item">Izbaci</button>
            </div>
        `;

        cartItemsContainer.appendChild(cartItem);

        // Decrease Quantity
        cartItem.querySelector(".decrease").addEventListener("click", () => {
            if (item.quantity > 1) {
                item.quantity--;
                updateCart();
            }
        });

        // Increase Quantity
        cartItem.querySelector(".increase").addEventListener("click", () => {
            item.quantity++;
            updateCart();
        });

        // Remove Item
        cartItem.querySelector(".remove-item").addEventListener("click", () => {
            cart = cart.filter(cartItem => cartItem.name !== item.name);
            updateCart();
        });
    });

    totalPriceElement.textContent = totalPrice.toFixed(2) + " €";
}
