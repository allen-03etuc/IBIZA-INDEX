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
html, body {
    height: 100%;
    margin: 0;
    font-family: Arial;
}

body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background-image: radial-gradient(circle at center, #926969,  #770909,  #200000);
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
    top: 0;
    left: 0;
    z-index: 1000;
}

.shanel {
    font-size: 60px;
    color: white;
    font-family: vostela;
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

.main {
    flex: 1 0 auto; 
    padding-top: 120px; 
    display: flex;
    justify-content: center;
    align-items: flex-start;
}

#fb {
  color: white;
  font-family: vostela;
}
.cover {
    width: 40%;
    background-color: #5a0000;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
}

form {
    margin-top: 20px;
    font-size: 15px;
    color: white;
}


#message {
    width: 100%;
    height: 250px;
    border-radius: 5px;
}

input {
    width: 100%;
    height: 20px;
    border-radius: 5px;
}

button {
    border-radius: 5px;
    margin-top: 10px;
}

footer {
    flex-shrink: 0; 
    padding: 20px 0;
    background-color: #5a0000;
    color: #f7a5a5;
    font-family: vostela;
    font-size: 12px;
    text-align: center;
}

@media (max-width: 768px) {
    .shanel {
        font-size: 38px;
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
    }

    .navs {
        width: 100%;
        text-align: center;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .cover {
        width: 90%;
        padding: 10px;
        margin: 10px auto;
    }

    #message, input {
        width: 100%;
    }
}
</style>
</head>
<body>

<div class="navv">
    <h1 class="shanel">IBIZA.CO</h1>
    <div class="navs">
        <a href="home.php">Home</a>&nbsp;&nbsp;
        <a href="mendy.php">Products</a>&nbsp;&nbsp;
        <a href="about.php">About</a>&nbsp;&nbsp;
        <a href="admin.php">Admin</a>
    </div>
</div>

<div class="main">
    <div class="cover">
      <center>
        <h1 id="fb">FEEDBACK</h1></center>
        <form>
      NAME: <input type="text"><br><br>
      MOBILE NO.: <input type="number"><br><br>
        MESSAGE:<textarea rows="10" id="message"></textarea>
        </form>
        <center><button type="submit">SUBMIT</button></center>
    </div>
</div>

<footer>
    <h5>All rights reserved. IBIZA.co</h5>
</footer>

</body>
</html>
