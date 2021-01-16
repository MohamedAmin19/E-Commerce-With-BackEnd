const cartProducts = JSON.parse(localStorage.getItem('items')) || [];
document.querySelector('.cart-items').innerHTML+= cartProducts;
var removeBtn = document.querySelectorAll('.remove-from-cart');
var quantity = document.querySelectorAll('.product-quantity');

function update (e){
    var input = e.target;
    var quan = parseInt(input.value);
    var price = parseInt(input.parentElement.parentElement.querySelector('.product-price').innerHTML);
    var subtotal = input.parentElement.parentElement.querySelector('.product-subtotal');

    subtotal.innerHTML = (quan*price);
    
    var subTotal = input.parentElement.parentElement.parentElement.querySelectorAll('.product-subtotal');
    var sumSubTotal=0;
    sumTotal=0;
    for(i=0;i<subTotal.length;i++)
    {
       sumSubTotal += parseInt(subTotal[i].innerHTML);
    }
    document.querySelector('.sub').innerHTML = sumSubTotal;
    document.querySelector('.total').innerHTML = sumSubTotal*0.14;
}
function removing(e){
e.target.parentElement.parentElement.remove();
document.querySelector('.sub').innerHTML=0; 
document.querySelector('.total').innerHTML=0; 
}
quantity.forEach(item => item.addEventListener('change',update));
removeBtn.forEach(item => item.addEventListener('click',removing));