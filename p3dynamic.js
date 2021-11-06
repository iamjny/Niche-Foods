var addQ = document.getElementById("addQ");
addQ.addEventListener("click",addQuantity);
var subQ = document.getElementById("subQ");
subQ.addEventListener("click",subQuantity);
var extendD = document.getElementById("descriptionButton");
extendD.addEventListener("click",extend);
extendD.addEventListener("dblclick",distend);
console.log("test");
document.getElementById("Quantity").innerHTML = localStorage.getItem("testKey");
const basePrice=parseFloat(document.getElementById("price").innerHTML);
function updatePrice(){
    var price=document.getElementById("price").innerHTML;
    var rawprice = parseFloat(price);
    var qty = document.getElementById("Quantity").innerHTML;
    console.log(rawprice);
    var updatedPrice = basePrice* parseInt(qty);
    console.log(updatedPrice);
    console.log(qty);
    price = updatedPrice.toFixed(2);
    document.getElementById("price").innerHTML= price;
}
function addQuantity(){
    var qt = document.getElementById("Quantity").innerHTML;
    var SystemQ = parseInt(qt)+1;
    localStorage.setItem("testKey",SystemQ);
    document.getElementById("Quantity").innerHTML = localStorage.getItem("testKey");
    updatePrice();
}
function subQuantity(){
    var qt = document.getElementById("Quantity").innerHTML;
    if(qt>0){
        var SystemQ = parseInt(qt)-1;
        localStorage.setItem("testKey",SystemQ);
        document.getElementById("Quantity").innerHTML = localStorage.getItem("testKey");
        updatePrice();
    }
}
console.log(localStorage.getItem("testKey"));
function extend(){
    document.getElementById("extension").style.visibility="visible";
}
function distend(){
    document.getElementById("extension").style.visibility="hidden";
}

