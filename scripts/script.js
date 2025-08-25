// go to watch page
document.getElementById("watch-div").addEventListener("click", function(){
    window.location.href="watch.html";
});
// go to bag page
document.getElementById("bag-div").addEventListener("click", function(){    
  window.location.href="bag.html";
});
// go to shoes page
document.getElementById("shoes-div").addEventListener("click", function(){
    window.location.href="shoes.html";
});

// products list dropdown menu
const productsList=document.getElementById('products-list');
const productsMenu=document.getElementById('products-menu');
productsList.addEventListener('click', function(event){
    event.preventDefault();
    productsList.classList.toggle('active');
});