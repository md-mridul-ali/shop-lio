// go to watch page
document.getElementById("watch-div").addEventListener("click", function () {
    window.location.href = "watch.html";
});
document.getElementById("watch").addEventListener("click", function(){
    window.location.href="watch.html";
})
// go to bag page
document.getElementById("bag-div").addEventListener("click", function () {
    window.location.href = "bag.html";
});
document.getElementById("bag").addEventListener("click", function(){
    window.location.href="bag.html";
})
// go to shoes page
document.getElementById("shoes-div").addEventListener("click", function () {
    window.location.href = "shoes.html";
});
document.getElementById("shoes").addEventListener("click", function(){
    window.location.href="shoes.html";
})
// products list dropdown menu
const productsList = document.getElementById('products-list');
const productsMenu = document.getElementById('products-menu');
productsList.addEventListener('click', function (event) {
    event.preventDefault();
    productsMenu.classList.toggle("show");
    // console.log('products clicked')
});


// add to cart button
const cartIcon = document.getElementById("cart-icon");
const cart = document.querySelector(".cart");
const cartClose = document.getElementById("cart-close");
cartIcon.addEventListener("click", function (e) {
    // console.log("cart clicked");
    e.preventDefault();
    cart.classList.add("active");
});
cartClose.addEventListener("click", function () {
    cart.classList.remove("active")
});
const addBtns = document.getElementsByClassName("add-btn");
for (let addBtn of addBtns) {
    // console.log(addBtn);
    addBtn.addEventListener("click", function () {
        // console.log("add button clicked")
        const image = addBtn.parentNode.parentNode.parentNode.childNodes[1].childNodes[1].src;
        // console.log(image);
        const title = addBtn.parentNode.parentNode.parentNode.childNodes[3].childNodes[1].innerText;
        // console.log(title);
        const price = addBtn.parentNode.parentNode.parentNode.childNodes[3].childNodes[5].childNodes[1].innerText;
        // console.log(price);
    //    alert("successfully add");
        const cartAdd = document.getElementById("cart");
        // const cartContent=querySelector(".cart-content");
        const newDiv = document.createElement("div");
        // newDiv.classList.add("cart-box");
        newDiv.innerHTML = `
        
        <div class="cart-content">
             <div class="cart-box">
                <img class="cart-img" src="${image}" alt="">
                <div class="cart-detail">
                    <h2 class="cart-product-title">${title}</h2>
                    <span class="cart-price">$${price}</span>
                    <div class="cart-quantity">
                        <button id="decrement">-</button>
                        <span class="number">1</span>
                        <button id="increment">+</button>
                    </div>
                </div>
                <i class="fa-solid fa-trash cart-remove"></i>
            </div>
        </div>

        `;
        cartAdd.appendChild(newDiv);

        newDiv.querySelector(".cart-remove")
            .addEventListener("click", function () {
                newDiv.remove();
                updateTotalPrice();
            });

        // increment decrement
        newDiv.querySelector(".cart-quantity")
            .addEventListener("click", function (event) {
                const numberElement = newDiv.querySelector(".number");
                const decrementButton = newDiv.querySelector("#decrement");
                let quantity = numberElement.textContent;
                //  console.log(quantity)
                if (event.target.id === "decrement" && quantity > 1) {
                    quantity--;
                }
                else if (event.target.id === "increment") {
                     quantity++;
                }
                numberElement.textContent=quantity;
                updateTotalPrice();
            });

            updateTotalPrice();

    });
    
   
};
const updateTotalPrice=()=>{
    const totalPriceElement=document.querySelector(".total-price");
    console.log(totalPriceElement)
    const cartBoxes=document.querySelectorAll(".cart-box");
    let total=0;
    cartBoxes.forEach(cartBox=>{
        const priceElement=cartBox.querySelector(".cart-price");
        const quantityElement=cartBox.querySelector(".number");
        const price=priceElement.textContent.replace("$", "");
        const quantity=quantityElement.textContent;
        total=total+price*quantity;
    });
    totalPriceElement.innerHTML=`${total}`;
};
// buy button 
const buyBtns = document.getElementsByClassName("buy-btn");
for (let buyBtn of buyBtns) {
    buyBtn.addEventListener("click", function () {
        console.log("Buy button clicked");
    })
}