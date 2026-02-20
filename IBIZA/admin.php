<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ADMIN PANEL</title>

<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
  margin: 0;
  background-color: #ffffff;
  font-family: Arial;
}


.navv {
  height: 100px;
  width: 100%;
  background-color: #2d0000;
  padding: 10px;
  spacing: 10px;
}

.shanel {
  font-size: 60px;
  color: white;
  text-align: center;
  font-family: vostela;
}

@font-face {
  font-family: vostela;
  src: url(vostela.otf);
}

a {
  text-decoration: none;
  color: white;
}


#title {
  padding-top: 10px;
  margin-top: 80px;
   font-family: vostela;
    font-size: 250%;
    color: white;
  border-radius: 10px;
  
}

input{
  width: 70%;
}

.cover {
  border-radius: 10px;
  background-color: #2d0000;
  height: 100%;
  width: 40%;
  padding-bottom: 20px;

}


button {
  border-radius: 5px;
  margin-top: 10px;
}

#file-upload {
  color: white;
  border-radius: 5px;
}

#file-upload:hover {
}

table {
   width: 70%;
margin-bottom: 20px;
}


td {
 
  text-align: center;
  padding: 10px;
  table-collapse: collapse;
  border: solid black 1px;
}


.image {
  width: 80px;
  height: 80px;
}


  



</style>
</head>
<body>

<div class="navv">
  <h1 class="shanel">IBIZA.CO</h1>
  </div>
</div>
<center>

  <div class="cover">

  <h1 id="title">
   ADMIN
  </h1>  

  <br><br>
    <form action="upload.php" method="POST" id="form" enctype="multipart/form-data">
    <input type="number" name="product_id" placeholder="PRODUCT ID">
    <br><br>
    <input type="text" name="product_name" placeholder="PRODUCT NAME">
    <br><br>
         <input  type="file" name="product_img" id="file-upload" value="Upload Image" >
         <br><br>
        
    <input type="number" name="price" placeholder="PRICE">  
    <br><br>
    <input type="number" name="stocks" placeholder="STOCKS">
    <br><br>
    <button type="submit">ADD NEW PRODUCT</button></div>
</form>
<br><br><br>
<table>
  <tr>
     <td>PRODUCT ID</td>
     <td>PRODUCT NAME</td>
     <td>PRICE</td>
     <td>STOCKS</td>
     <td>PRODUCT IMAGE</td>
  </tr>
  <tbody id="ttbody">
    <?php
    include 'database.php';

    $sql="SELECT * FROM ashly";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
       ?>
       <tr>
        <td><?php echo $row["product_id"]?></td>
        <td><?php echo $row["product_name"]?></td>
        <td><?php echo $row["price"]?></td>
        <td><?php echo $row["stocks"]?></td>
        <td><img src="show.php?id=<?php echo $row["product_id"];?>" alt="product img" class="image"></td>
       </tr>
       <?php 
      }
    } else {
      echo "<tr><td colspan='5'>No records found.</td></tr>";
    }
    ?>
    
  </tbody>
</table>
</body>
<script>
  fetch('fetch_studentzs.php')
      .then(response=> response.json())
      .then(data => {
        const tbody = document.querySelector("table tbody");
        tbody.innerHTML = "";

        data.forEach(student=> {
          const row = document.createElement("tr");
        row.innerHTML = `
        <td>${student.product_id}</td>
        <td>${student.product_name}</td>
        <td>${student.price}</td>
        <td>${student.stocks}</td>
        <td>${student.product_img}</td>
    `;
                tbody.appendChild(row);  });
      })

      </script>


