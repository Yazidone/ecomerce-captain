// Fly To Shopping Cart Effect
const cards = document.querySelectorAll('.card');
const cartCount = document.querySelector('.cartCount')
const shopping_cart_header = document.querySelector('.shopping-cart-header');
const shopping_cart = document.querySelector('.shopping-cart');
const cart_btns = document.querySelectorAll('.add-to-cart');
const div = document.querySelectorAll('.div');

for (cart_btn of cart_btns) {
    cart_btn.onclick = (e) => {

        shopping_cart.classList.add('active');

        let product_count = Number(shopping_cart.getAttribute('data-product-count')) || 0;
        shopping_cart.setAttribute('data-product-count', product_count + 1);
        cartCount.innerHTML = product_count + 1
        // finding first grand parent of target button 
        // let target_parent = e.target.parentNode.parentNode.parentNode;
        // target_parent.style.zIndex = "100";
        // // Creating separate Image
        // let img = target_parent.querySelector('img');
        // console.log(img);
        // let flying_img = img.cloneNode();
        // flying_img.classList.add('flying-img');

        // target_parent.appendChild(flying_img);

        // // Finding position of flying image

        // const flying_img_pos = flying_img.getBoundingClientRect();
        // const shopping_cart_pos = shopping_cart.getBoundingClientRect();

        // let data = {
        //     left: shopping_cart_pos.left - (shopping_cart_pos.width / 2 + flying_img_pos.left + flying_img_pos.width / 2),
        //     bottom: (shopping_cart_pos.bottom + window.scrollY) - flying_img_pos.bottom +30 
        //     // bottom: shopping_cart_pos.bottom - flying_img_pos.bottom + 30
        // }

        // // console.log(shopping_cart_pos.bottom);
        

        // flying_img.style.cssText = `
        //                         --left : ${data.left.toFixed(2)}px;
        //                         --bottom : ${data.bottom.toFixed(2)}px;
        //                         `;
        // console.log(data.left.toFixed(2));
        // console.log(data.bottom.toFixed(2));
        // setTimeout(() => {
        //     target_parent.style.zIndex = "";
        //     target_parent.removeChild(flying_img);
        //     // shopping_cart_header.classList.remove('active');
        //     shopping_cart.classList.remove('active');
        // }, 1000);
    }
}