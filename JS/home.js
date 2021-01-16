//vars
var cartBtns = document.querySelectorAll('.home-addtocart');
var cart = document.querySelector('cart');
const products = JSON.parse(localStorage.getItem('items')) || [];
var cartTot = document.querySelector('cart-total');
var itemsArr = [];
//add to cart function
function addToCart(e){
   
   var product = e.target;
   //var image = product.parentElement.parentElement.parentElement.querySelector('img').getAttribute('src');
   var name = product.parentElement.parentElement.parentElement.parentElement.querySelector('h5').innerHTML;
   var price = product.parentElement.parentElement.parentElement.parentElement.querySelector('.product-home-price').innerHTML;
   var quantity = "1";
   var subtotal = parseInt(price) * parseInt(quantity);
   var itemTable = `
   <tr class="item">
      <td class="product-name">${name}</td>
      <td class="product-price">${price}</td>
      <td class="product-quantity"><input type="number" min="0" value="${quantity}"></td>
      <td class="product-subtotal">${subtotal}</td>
      <td class="remove-cart-btn"><button class="remove-from-cart">X</button></td>
   </tr>
   `   
   itemsArr.push(itemTable);
   //var productss=localStorage.setItem("items", JSON.stringify(itemsArr));
}

cartBtns.forEach(item => item.addEventListener('click', addToCart));
//men,women and children tabs
var btn = document.querySelectorAll('.test');
btn.forEach(btn => btn.addEventListener('click',toggling));

function toggling(e){
var testing = e.target;
btn.forEach(button => button.classList.remove('active'));
testing.classList.add('active');

// blocks

if(e.target.innerHTML == 'Men'){
 document.querySelectorAll('.men').style.display = "inline-block";
 document.querySelectorAll('.women').style.display = "none";   
 document.querySelectorAll('.children').style.display = "none";
}
else if(e.target.innerHTML == 'Women'){
   document.querySelectorAll('.men').style.display = "none";
   document.querySelectorAll('.women').style.display = "inline-block";
   document.querySelectorAll('.children').style.display = "none";
}
else if(e.target.innerHTML == 'Children'){
   document.querySelectorAll('.men').style.display = "none";
   document.querySelectorAll('.women').style.display = "none";
   document.querySelectorAll('.children').style.display = "inline-block";
}
}
