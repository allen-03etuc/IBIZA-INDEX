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
  display: flex;
    flex-direction: column;
    min-height: 100vh; 
    margin: 0;
    background-image: radial-gradient(circle at center, #926969,  #770909,  #200000);
    font-family: Arial;
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




@font-face {
  font-family: vostela;
  src: url(htdocs/IBIZA/vostela.otf);
}

a {
  text-decoration: none;
  color: white;
}


#aboutUs {
    font-family: vostela;
    font-size: 70px;
    color: white;
}

#desc {
    color: white;
}

.abt {
  margin: auto;
  margin-top: 120px;
  border-radius: 10px;
  background-color:  #4e0000;
  width: 50%;
  padding: 20px;
  text-align: center;
  
}


footer {
  margin-top: auto;  
  padding: 20px 0;
  background-color: #5a0000;
  color: #f7a5a5;
  font-family: vostela;
  font-size: 12px;
  text-align: center;
}

/*media*/

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

  .abt {
    width: 90%;
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

    <a href="mendy.php" id="products">
      Products
    </a>&nbsp;&nbsp;

    <a href="contact.php" id="contact">
      Contact
    </a>&nbsp;&nbsp;

     <a href="admin.php" id="products">
      Admin
    </a>

  </div>
</div>


<div class="abt">
<h1 id="aboutUs">
    ABOUT US
</h1>
<p id="desc">The IBIZA.co was originally established in 1999, founded by our CEO. 
She not only paved the way for the makeup industry in the Philippines, but also produced jobs for thousands of our fellow Filipino people.</p>
</div>


<footer>
  <h5>All rights reserved. IBIZA.co</h5>
</footer></body>