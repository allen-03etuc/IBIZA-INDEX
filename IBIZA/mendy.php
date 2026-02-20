<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>IBIZA.CO</title>

<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
  margin: 0;
 background-image: radial-gradient(circle at center, #926969,  #770909,  #200000);
}

@font-face {
  font-family: vostela;
  src: url(htdocs/IBIZA/vostela.otf);
}

a {
  text-decoration: none;
  color: white;
}

.navv {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  height: 100px;
  width: 100%;
  background-color: #5a0000;
  padding: 10px 30px;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1000;
}

.shanel {
  font-size: 60px;
  color: white;
  font-family: vostela;
  text-align: left;
}

.navs {
  font-size: 25px;
  font-family: vostela;
}




#homey:hover {
  color: rgba(255, 255, 255, 1);
}




.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  width: 90%;
  margin: auto;
  padding: 20px;
}

.product-card {
  margin-top: 100px;
  background-color:  #4e0000;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 0 10px rgba(0,0,0,1);
  color: white;
  text-align: center;
  
}

.product-card:hover {
     box-shadow: 0 0 10px rgba(255, 255, 255, 1);
}

.product-img-holder {
  height: 200px;
  overflow: hidden;
  border-radius: 10px;
}
.product-img-holder img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.label-box {
  margin: 5px 0;
}

.add-cart, .buy-now {
  display: inline-block;
  padding: 5px 10px;
  border-radius: 5px;
  cursor: pointer;
  background: #7c1010c5;
  color: white;
}
.buy-now {
  background: #ee868667;
}


.modal {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.6);
  z-index: 999;
  justify-content: center;
  color: white;
}
.modal.active {
  display: flex;
}
.modal-box {
  margin-bottom: 180px;
  margin-top: 20px;
  background:#2d0000;
  padding: 20px;
  width: 500px;
  border-radius: 12px;
}
.modal-box img {
  width: 100%;
  height: 200px;
  object-fit: contain;
  margin-bottom: 10px;
  border-radius: 5px;
}
.modal-box input {
  width: 100%;
  margin-bottom: 8px;
  padding: 5px;
}

.coBut {
  border-radius: 3px;
  color: gray;
}

.cobut {
  border-radius: 3px;
  background-color:#f7a5a5; 
}

footer {
  padding-top: 5px;
  padding: 20px 0;
  min-height: 5vh;
  background-color: #5a0000;
  color: #f7a5a5;
  font-family: vostela;
  font-size: 12px;
}

#modal_product_name {
  font-family: vostela;
}


@media (max-width: 768px) {
  .shanel {
    width: 100%;
    font-size: 38px;
    text-align: center;
    margin-bottom: 10px;
  }
  .navs {
    width: 100%;
    text-align: center;
    font-size: 16px;
    white-space: normal;
    margin-bottom: 10px;
  }

  

  footer {
  padding: 20px 0;

  }
}



</style>
</head>

<body>


<div class="navv">
  <h1 class="shanel">IBIZA.CO</h1>

  <div class="navs">
    <a href="home.php" id="home"></style>
    Home
    </a>&nbsp;&nbsp;

    <a href="about.php" id="about">
    About
    </a>&nbsp;&nbsp;

    <a href="contact.php" id="contact">
      Contact
    </a>&nbsp;&nbsp;

    <a href="admin.php" id="cart">
      Admin
      
    </a>  
  </div>
</div>


<div class="product-grid">
<?php
$sql = "SELECT * FROM ashly";
$result = $conn->query($sql);

if ($result->num_rows > 0):
  while ($product = $result->fetch_assoc()):
?>
  <div class="product-card">
    <div class="product-img-holder">
      <img src="show.php?id=<?php echo $product['product_id']; ?>">
    </div>

    <div class="label-box">
      <strong><?php echo $product['product_name']; ?></strong>
    </div>

    <div class="label-box">
     <strong>Price:</strong> ₱<?php echo number_format($product['price'], 2); ?>
    </div>

    <div class="label-box">
      <strong>Stocks:</strong> <?php echo $product['stocks']; ?>
    </div>


    <a class="add-cart">Add to cart</a>

   │

    <a class="buy-now"
      onclick="openModal(
        <?php echo $product['product_id']; ?>,
        '<?php echo addslashes($product['product_name']); ?>',
        <?php echo $product['price']; ?>
      )">
      Buy Now
  </a>
   
  </div>
<?php
  endwhile;
else:
  echo "<p style='color:white'>No products available</p>";
endif;
$conn->close();
?>
</div>



<!-- modal po ito guys -->
<div class="modal" id="modal">
  <div class="modal-box">
    <center>
    <h3 id="modal_product_name"></h3>
    </center>
    <form action="stocks.php" method="POST">
      
      <input type="hidden" name="product_id" id="product_id">

      <img id="img_id">
      <table>
      <tr><td>
      <label>Full Name</label>
      <input type="text" id="cname" name="cname">
      </td><td>
      <label>Price</label>
      <input type="number" id="modal_price" name="price" readonly>
      </td></tr>
      <tr><td>
      <label>Email</label>
      <input type="email" id="email" name="email"></td>
      <td><label>Quantity</label>
      <input type="number" id="total_order" name="total_order" value="1" min="1" oninput="computeTotal()">
      </td> </tr>
      <tr><td>
      <label>Mobile Number</label>
      <input type="text" id="mobile" name="mobile" placeholder="(+63)xxx-xxxxxxx">
      </td><td>
       <label>Total Price</label>
      <input type="text" id="total_price" name="total_price" readonly>
       </td></tr>
      </table>
      <input type="text" id="modal_product_name1" name="product_name" hidden>
     
     <center>
      <button type="submit" class="cobut">Confirm</button>
      <button type="button" onclick="closeModal()" class="coBut">Cancel</button>
   </center>
   </form>
  </div>
</div>
<footer><center>
  <h5>All rights reserved 2026. IBIZA.co</h5>
</footer>
</body>

<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

<script>
function openModal(id, name, price){
  document.getElementById("modal").classList.add("active");
  document.getElementById("product_id").value = id;
  document.getElementById("modal_product_name").innerHTML = name;
  document.getElementById("modal_product_name1").value = name;
  document.getElementById("modal_price").value = price;
  document.getElementById("total_order").value = 1;
  document.getElementById("total_price").value = price;
  document.getElementById("img_id").src = "show.php?id=" + id;
}

function closeModal(){
  document.getElementById("modal").classList.remove("active");
}

function computeTotal(){
  let price = document.getElementById("modal_price").value;
  let qty = document.getElementById("total_order").value;
  document.getElementById("total_price").value = price * qty;
}
</script>


<!--Alert po-->
<?php if (isset($_GET['order']) && $_GET['order'] === 'success'): ?>
<script>
alert("Order placed! Thank you for trusting Ibiza.co.");
window.history.replaceState({}, document.title, window.location.pathname);
</script>

<?php endif; ?>

<?php if (isset($_GET['order']) && $_GET['order'] === 'nostock'): ?>
<script>
alert("No stocks available for this product.");
window.history.replaceState({}, document.title, window.location.pathname);
</script>

<?php endif; ?>

<?php if (isset($_GET['order']) && $_GET['order'] === 'error'): ?>
<script>
alert("Something went wrong. Please try again.");
window.history.replaceState({}, document.title, window.location.pathname);
</script>

<?php endif; ?>



</html>
