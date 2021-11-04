var test2= document.getElementsByClassName("cart_payment");
var upButtons = document.getElementsByClassName("increase_qnt");
var downButtons = document.getElementsByClassName("decrease_qnt");
var products = document.getElementsByClassName("cart_product");
var test2= document.getElementsByClassName("cart_payment");
const indices = [0,1,2];
var j=0;
for(j;j<upButtons.length;j++){
    upButtons[j].addEventListener("click",quantityUp);
    downButtons[j].addEventListener("click",quantityDown);
}
function quantityUp(){
    var q = parseInt(this.parentNode.querySelector(".quantity").value);
    q = q+1;
    this.parentNode.querySelector(".quantity").value = q;
    processedSum();
}
function quantityDown(){
    var q = parseInt(this.parentNode.querySelector(".quantity").value);
    if(q>0){
        q = q-1;
        this.parentNode.querySelector(".quantity").value = q;
    }
    processedSum();
}
function rawSum(){
    var sumRaw = 0;
    var i =0;
    for(i;i<products.length;i++){
      var test1=products[i].querySelector(".item_price").innerHTML;
      var price = parseFloat(test1.substring(2,test1.length));
      var quantity = products[i].querySelector(".item_quantity").querySelector("input").value;
      sumRaw = sumRaw +(price*quantity);
    }
    test2[0].querySelector(".raw").innerHTML = "$"+sumRaw.toFixed(2);
    return sumRaw;
  }
  console.log(test2[0].querySelector(".raw").innerHTML);
  console.log(rawSum());
  const GST = 0.05; const QST = 0.09975;
  function GSTtest(){
    test2[0].querySelector(".gst").innerHTML = "$"+parseFloat((rawSum()*GST).toFixed(2));
    return parseFloat((rawSum()*GST).toFixed(2));
  }
  function QSTtest(){
    test2[0].querySelector(".qst").innerHTML = "$"+parseFloat((rawSum()*QST).toFixed(2));
    return parseFloat((rawSum()*QST).toFixed(2));
  }
  function processedSum(){
    var final = GSTtest() + QSTtest() + rawSum();
    test2[0].querySelector(".final").innerHTML = "$"+final.toFixed(2);
    updateNum();
    return final.toFixed(2);
  }
  console.log(processedSum());
  var deleteFromCart = document.getElementsByClassName('remove_fromcart');

  console.log(deleteFromCart);

  for(var i=0; i<deleteFromCart.length; i++)
  {
    var button = deleteFromCart[i];
    console.log(button);
    button.addEventListener('click', removeProduct)
  }
  function updateNum(){
      var size=0;
      for( var i=0;i<products.length;i++){
        size = parseInt(size+parseInt(products[i].querySelector(".item_quantity").querySelector("input").value));
      }
      test2[0].querySelector(".itemNum").innerHTML = size;
      if(size===0){
        document.getElementById("emptyText").style.visibility="visible";
      }
  }
  function removeProduct(){
    this.parentNode.parentNode.parentNode.remove();
    processedSum();
  }