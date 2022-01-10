//shopping cart js
let cart_btn =document.getElementById('cart_btn')
let shoping_cart =document.getElementById('shopingCart')
let overlay = document.getElementsByClassName('overlay')[0]

cart_btn.addEventListener('click',function(){
    overlay.style.display="block"
    shoping_cart.classList.add('cart_active')
})

let cart_close =document.getElementById('cart_close')

cart_close.addEventListener('click',function(){
    overlay.style.display="none"
    shoping_cart.classList.remove('cart_active')
})
//like cart js
let like_btn =document.getElementById('like_btn')
let like_cart =document.getElementById('likeCart')

like_btn.addEventListener('click',function(){
    overlay.style.display="block"
    like_cart.classList.add('cart_active')
})

let like_close =document.getElementById('like_close')

like_close.addEventListener('click',function(){
    overlay.style.display="none"
    like_cart.classList.remove('cart_active')
})
//Login form js
const Login_Validation = (event) => {
    const emailInput = document.getElementById('emailInput').value
    const emailRex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    const emailError = document.getElementById('emailError')
    const passInput = document.getElementById('passInput').value
    const passError = document.getElementById('passError')

    emailError.innerHTML = ""
    passError.innerHTML = ""
    if (emailInput == "") {
        emailError.innerHTML = "Field Required"
        return false
    }
    if (!emailRex.test(emailInput)) {
        emailError.innerHTML = "Invalid Email"
        return false
    }
    if (passInput == "") {
        passError.innerHTML = "Field Required"
        return false
    }
}

//getting total cart item
let total_items_in_cart = document.getElementsByClassName("all_p_cart")[0].childElementCount;
let cart_total = document.getElementsByClassName('cart_total')[0].innerHTML = total_items_in_cart;

//getting total liked
let all_liked =  document.getElementsByClassName("all_liked")[0].childElementCount;
let like_total = document.getElementsByClassName('like_total')[0].innerHTML = all_liked;


//navbar
let myham_burger = document.getElementsByClassName('myham_burger')[0];
let top_nav_second = document.getElementsByClassName('top-nav-second')[0];

myham_burger.addEventListener('click',function(){
    top_nav_second.classList.toggle('m_active');
})

