<!DOCTYPE html>
<html lang="en">
  <head>
<?php
        echo $_SESSION["price"];
	echo $_SESSION["Quantity"];
?>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="shortcut icon" href="https://users.encs.concordia.ca/~ca_henr/img/store.png">

    <link rel="stylesheet" href="https://users.encs.concordia.ca/~ca_henr/css/index.css">
    <link rel="stylesheet" href="https://users.encs.concordia.ca/~ca_henr/css/cart.css">
    
    <title>Shopping Cart</title>

  </head>
  <body>
    
    <div id="navbar">
      <div id="topnav_desktop">
        <a href="https://users.encs.concordia.ca/~ca_henr/nichefoods/home.html#aisles_main">Aisles</a>
        <a href="https://users.encs.concordia.ca/~ca_henr/nichefoods/home.html#footer">Contact</a>
      </div>
      <div id="topnav_mobile">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"
          ><i class="fa fa-bars"></i
        ></a>
      </div>
      <div id="logo">
        <a href="https://users.encs.concordia.ca/~ca_henr/nichefoods/home.html"
          ><i class="fa fa-spoon" aria-hidden="true"></i>Niche Foods</a
        >
      </div>
      <div id="user_exp">
        <a href="#">
          <i class="fas fa-shopping-basket"></i>
        </a>
        <a href="https://users.encs.concordia.ca/~ca_henr/nichefoods/pages/login.html">
          <i class="fa fa-user-circle" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div id="menu_container">
      <div id="menu">
        <a href="https://users.encs.concordia.ca/~ca_henr/nichefoods/home.html#aisles_main">Aisles</a>
        <a href="#footer">Contact</a>
      </div>
    </div>


    <div class="content">
        <div class="banner">
        </div>
        <div class="title">
          <h1>
            <i class="fa fa-shopping-basket" aria-hidden="true"></i> Your Cart
          </h1>
        </div>
    </div>
     
    <div class="main">

	<p id="emptyText" style="font-weight: 600; font-size: larger;">Cart currently empty!</p>

    <div id="shopping_cart">
      <div class="cart">
        <div class="items">
          <div class="cart_product" price = 3.99 name="kombucha">
            <img src="https://users.encs.concordia.ca/~ca_henr/nichefoods/pages/aisles/beverages/img/kombucha.jpg" alt="synergy kombucha" />
            <div class="cart_item_information">
              <div class="item_name">
                  <h3>SYNERGY Kombucha</h3>
                  <h3>C$3.99</h3>
              </div>
              <h4 class="item_price">C$3.99</h4>
              <p class="item_quantity">
                QTY:
                <button class="decrease_qnt">-</button>
                <input class = quantity  value="1" />
                <button class="increase_qnt">+</button>
              </p>

              <div>
                <button class="remove_fromcart">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </div>
            </div>
          </div>

          <div class="cart_product" price = 2.99 name="croissant">
            <img src="https://users.encs.concordia.ca/~ca_henr/nichefoods/pages/aisles/bakery/img/croissants.jpg" alt="croissant" />
            <div class="cart_item_information">
                <div class="item_name">
                    <h3>Butter Croissant</h3>
                    <h3>C$2.99</h3>
                </div>
              <h4 class="item_price">C$2.99</h4>
              <p class="item_quantity">
                QTY:
                <button class="decrease_qnt">-</button>
                <input class = quantity value="1" />
                <button class="increase_qnt">+</button>
              </p>

              <div>
                <button class="remove_fromcart">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </div>
            </div>
          </div>

          <div class="cart_product" price = 5.99 name="strawberry">
            <img src="https://users.encs.concordia.ca/~ca_henr/nichefoods/pages/aisles/fruits_veg/img/strawberries.jpg" alt="strawberries" />
            <div class="cart_item_information">
                <div class="item_name">
                    <h3>Strawberries</h3>
                    <h3>C$5.99</h3>
                </div>
              <h4 class="item_price">C$5.99</h4>
              <p class="item_quantity">
                QTY:
                <button class="decrease_qnt">-</button>
                <input class = quantity value="1" />
                <button class="increase_qnt">+</button>
              </p>

              <div>
                <button class="remove_fromcart">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="cart_payment">
          <p>
            <span>Number of Items:</span>
            <span class = "itemNum">3</span>
          </p>
          <p>
            <span>Subtotal</span>
            <span class="raw">C$12.97</span>
          </p>
          <p>
            <span>QST</span>
            <span class="qst">$</span>
          </p>
          <p>
            <span>GST</span>
            <span class="gst">$</span>
          </p>
          <hr>
          <p>
            <span>Total</span>
            <span class="final">$</span>
          </p>
          <div>
            <a href="#checkout">Proceed to Checkout</a>
            <a href="https://users.encs.concordia.ca/~ca_henr/nichefoods/home.html#aisles_main"><i class="fas fa-arrow-circle-left" style="padding-right: 5px;"></i>Continue Shopping</a>
          </div>
        </div>
        
      </div>
    </div>

</div>

<!-- Footer -->
    <footer id="footer">
        <div class="text">
        <h3><i class="fas fa-utensil-spoon"></i>Niche Foods</h3>
        <p>Premium niche foods cultivated from local sources at affordable prices</p>
        <p>2475 Rue des Regrattiers, Montréal, QC h2Z 4P2</p>
        <p>Mon-Fri  8:30 - 20:30</p>
        </div>
        <p class="text-center">&nbsp &copy; 2001-2021 Niche Foods</p>
    </footer>


  </body>
  <script type="text/javascript" src="https://users.encs.concordia.ca/~ca_henr/js/p4javascript.js">	</script>

  <script type="text/javascript">
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
      var menu = document.getElementById("menu");
      if (menu.className === "show") {
        menu.classList.remove("show");
      } else {
        menu.className = "show";
      }
    }
  </script>

<script>
  const burger = document.querySelector(".icon");
  let menuOpen = false;
  burger.addEventListener("click", () => {
    if (!menuOpen) {
      burger.classList.add("open");
      menuOpen = true;
    } else {
      burger.classList.remove("open");
      menuOpen = false;
    }
  });
</script>

</html>
