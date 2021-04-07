let carts = document.querySelectorAll('.add-cart');
 
let products = [
    {
    name:'Burger',
    price:30,
    tag:"burger",
    inCart:0


},
{
    name:'Special bhel',
    price:30,
    tag:"bhel",
    inCart:0
},
{
    name:'Veg Roll',
    price:30,
    tag:"vegroll",
    inCart:0
},
{
    name:'Grilled Sandwitch',
    price:30,
    tag:"sandwitch",
    inCart:0
},

];
for (let i=0; i < carts.length; i++){
    carts[i].addEventListener('click', (e) => {
        e.preventDefault();
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
}
function onloadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');  
 if(productNumbers){
     document.querySelector('.cart span').textContent = productNumbers;
 }
 console.log(productNumbers);
}
function cartNumbers(product){
    // console.log("this product is",product);
     let productNumbers = localStorage.getItem('cartNumbers');
     
     productNumbers = parseInt(productNumbers);
    //  console.log(productNumbers);
     if(productNumbers){
        localStorage.setItem('cartNumbers',productNumbers + 1);
         document.querySelector('.cart span').textContent = productNumbers + 1;
     }
    else{
     localStorage.setItem('cartNumbers',1);
     document.querySelector('.cart span').textContent =1;
     }
     setItems(product);   

}
function setItems(product){
    // console.log("inside of setitems function");
    // console.log("my prduct is",product);
   let cartItems = localStorage.getItem('productsInCart');
   cartItems = JSON.parse(cartItems);



   if(cartItems != null){

       if(cartItems[product.tag] == undefined){
           cartItems = {
               ...cartItems,
               [product.tag]: product
           }
       }
       cartItems[product.tag].inCart += 1;
   }else{
    product.inCart = 1;
    cartItems ={
        [product.tag]: product
    }
}
 
    localStorage.setItem("productsInCart",JSON.stringify(cartItems));
}
function totalCost(product){
    // console.log(product.price);
    let cartCost =localStorage.getItem('totalCost');
    
    console.log(typeof cartCost);

     if(cartCost != null){
        cartCost =parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
     }else
     {
    localStorage.setItem("totalCost", product.price);
}
}
function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    console.log(cartItems);
    let productContainer =document.querySelector("#tProducts");
    let cartCost =localStorage.getItem('totalCost');
    if(cartItems && productContainer){
        //console.log("running");
        productContainer.innerHTML ='';
        Object.values(cartItems).map(item => {

            productContainer.innerHTML += `
            <tr>
            <td>
            <div class="cart-info">
                <div class="product">
                    <img src="./images/${item.tag}.jpg"></img>                 
                </div> 
                <div class="price">
                    <span>${item.name}</span><br>
                    <span>${item.price}</span>
                </div>
                </div>
            </td>
            <td>
                <div class="quantity">
                    <span>${item.inCart}</span>  
                </div>     
            </td>
            <td>
                <div class="total">
                    ${item.inCart * item.price}
                </div>
            </td>       
        </tr>`
        });
        productContainer.innerHTML += 
       `<div class="total-price">
       <tr>
                <td colspan="2"><h2>Total</h2></td>
                
                <td> <h2>${cartCost}</h2></td>
            </tr>
        </div>
        `

    }
        
    


}
 
 onloadCartNumbers();
 displayCart();
