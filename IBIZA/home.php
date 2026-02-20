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
  height: 100%;
  margin: 0;
  max-width: 100%;
  overflow-x: hidden;
}

body {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background-image: radial-gradient(circle at center, #926969, #770909, #200000);
  font-family: Arial, sans-serif;
}

@font-face {
  font-family: vostela;
  src: url(vostela.otf);
}

@font-face {
  font-family: melody;
  src: url(melody.otf);
}

.navv {
  display: flex;            
  flex-wrap: wrap;           
  align-items: center;     
justify-content: space-between;
  height: 100px;
  width: 100%;
  background-color: #5a0000;
  padding: 10px 20px;
  position: fixed;
  z-index: 1000;
}

.navs {
  font-size: 25px;
  font-family: vostela;
}

.shanel {
  font-size: 60px;
  color: white;
  font-family: vostela;
}

a {
  text-decoration: none;
  color: white;
}


.main {

  margin-top: 120px;
  flex: 1;
}

.main-sub {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 20px;
  max-width: 100%;
}

.model {
  max-width: 50%;
  height: auto;
}
.look {
  display: flex;
  flex-direction: column;   
  align-items: center;      
}


.foreverY {
  font-family: melody;
  color: white;
}

h1 {
  font-size: 450%;
  word-wrap: break-word;
}
#product { 
  margin-top: 5px;  
  background-color: #500505;
  color: white;
  border-radius: 5px;
  padding: 5px 5px;
  font-size: 200%;
  text-align: center;
  box-shadow: 0 0 10px rgb(49, 2, 2);
}



#product:hover {
  box-shadow: 0 0 10px rgba(255, 255, 255, 1);
}


footer {
  padding: 20px 0;
  min-height: 10vh;
  background-color: #5a0000;
  color: #f7a5a5;
  font-family: vostela;
  font-size: 12px;
  text-align: center;
}


@media (max-width: 768px) {

  
  .main-sub {
    flex-direction: row;
    justify-content: center;
    align-items: center;
  }

  .shanel {
    order: 1;               
    width: 100%;
    font-size: 38px;
    text-align: center;
    margin-bottom: 10px;
  }

  .navs {
    order: 2;              
    width: 100%;
    text-align: center;
    font-size: 16px;
    white-space: normal;    
    margin: 0;
  }



   #product {
    font-size: 100%;
    padding: 8px 16px;
    padding-top: 0;
  }

 
  .model, .look {
    max-width: 42%;
  }

 
  h1 {
    font-size: 280%;
  }

}


 


@media (max-width: 768px) {
  
  .navs {
    float: none;           
    text-align: center;   
    padding: 10px 0;     
    font-size: 16px;      
    white-space: normal;  
  }

 
  .shanel {
    font-size: 38px;      
    float: none;        
    text-align: center;  
}
  
  footer {
    font-size: 9px;
    padding: 5px 3px;
  }
}

</style>
</head>
<body>
  <div class="navv">

    <h1 class="shanel">IBIZA.CO</h1>

  <div class="navs">
      <a href="home.php" id="home">Home</a>
      &nbsp;&nbsp;
      <a href="about.php" id="about">About</a>
      &nbsp;&nbsp;
      <a href="contact.php" id="contact">Contact</a>
      &nbsp;&nbsp;
      <a href="admin.php" id="cart">Admin</a>

  </div>
  </div>

  <div class="main">
    <div class="main-sub">
      <img src="model1.png" class="model">
      <div class="look">
        <h1 class="foreverY">Feel Young, <br> Stay Young</h1><br><br>
        <a href="mendy.php" id="product">PRODUCTS</a>
      </div>
    </div>
  </div>

  
  <footer>
    <h5>All rights reserved. IBIZA.co</h5>
  </footer>
</body>
</html>
