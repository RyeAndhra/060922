<html>

<head>

<title>Data Array</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body {
  background-color: #F7EDE2;
  font-family: sans-serif;
  margin: 0;
}

h2 {
  color: #627F78;
}

.header {
  background-color: #F7EDE2;
  color: #84A59D;
  padding: 20px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

input[type=submit] {
  background-color: #84A59D;
  color: white;
  width: 35%;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #627F78;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 30px;
}

.column {
  background-color: #F7EDE2;
  color: #84A59D;
  width: 40%;
  padding: 40px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width:600px) {
  .column .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>

</head>

<body>

<div class="header">
  <h1>Data Array | SMK Telkom Malang</h1>
</div>

<?php

$dataProduk = array (
    
    array("Galaxy S21", "Samsung", 19000000, true),

    array("Galaxy A71", "Samsung", 6999000, false),

    array("iPhone 12 Pro Max", "Apple", 20999000, true),

    array("iPhone 12 Mini", "Apple", 10999000, false)

);

for($row = 0; $row < 4; $row++) {

?>

  <div class="row">
  <div class="column">
  <div class="container">

<?php
  echo "<h2>Produk ";
  echo $row + 1;
  echo "</h2>";
  for($col = 0; $col < 3; $col++) {
    echo $dataProduk[$row][$col];
    echo "<br>";
  }

  if($dataProduk[$row][3] == true) {
    echo "Stok Tersedia";
?>

    <form action="#">
    <br>
    <div class="row">
      <input type="submit" value="Order">
    </div>
    </form>

<?php

  } else {
    echo "Stok Habis";
  }

?>

  </div>
  </div>
  </div>

<?php
  
  }

?>



</body>

</html>