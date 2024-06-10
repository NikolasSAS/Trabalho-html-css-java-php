window.onload = function() {
    displayCart();
};

function displayCart() {
    const cartList = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let total = 0;

    // Limpa o carrinho
    cartList.innerHTML = '';
    
    // Adiciona itens ao carrinho
    cart.forEach((item, index) => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - R$ ${item.price.toFixed(2)}`;
        
        // Botão para remover o item do carrinho
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Remover';
        removeButton.onclick = function() {
            removeFromCart(index);
        };
        li.appendChild(removeButton);

        cartList.appendChild(li);
        total += item.price;
    });

    // Atualiza o total do carrinho
    cartTotal.textContent = total.toFixed(2);
    cartQuantity.textContent = cart.length;

}

function removeFromCart(index) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1); // Remove o item do carrinho pelo índice
    localStorage.setItem('cart', JSON.stringify(cart));
    displayCart(); // Atualiza a exibição do carrinho
}