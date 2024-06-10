function addToCart(name, price) {
    const quantity = document.getElementById(`quantity${name}`).value;
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    for (let i = 0; i < quantity; i++) {
        cart.push({ name: name, price: price });
    }
    localStorage.setItem('cart', JSON.stringify(cart));
}