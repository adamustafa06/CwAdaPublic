  <!DOCTYPE html>
  <html lang="en">
  <head>
  <title>IDEUS STORE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/tab.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  
  </head>
  
  <body>
  
 <form class="form" action="login.php">
 <?php
$servername = "localhost";
$username = "root";
$password = "onur4231860";
$dbname = "IDEUS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<img src="shop.jpg">
	<div  class="container">
	<p id="onur">IDEUS STORE
  <span class="glyphicon glyphicon-log-out" id="metin" aria-hidden="true"></span>
  </p> 
<button class="btn btn-lg btn-danger" id="yer">Exit</button>

  
  
  <p class="italic">Welcome to IDEUS Store</p>
  <p class="amount">Current Amount:
<?php
 
session_start();
 
$userP=$_SESSION['login'];
$sql = "SELECT Amount FROM User where Password='$userP'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Amount"]."&#8364";
    }
  }


?>
  </p>
  <hr>

	<br><br>
	<nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
  <div class="navbar-header">
  <a class="navbar-brand" href="#">IDEUS</a>
  </div>
  <div>
  <ul class="nav navbar-nav">
  <li><a href="list.php">Home</a></li>
  <li class="active" id="renk"><a href="buy.php">Buy now</a></li>
  
  </ul>
  </div>
    <div>
  <ul class="nav navbar-nav">
  <li id="load_money1"><a href="money.php">Load Money</a></li>
  </ul>
  </div>
  </div>
  </nav>
  <font id="celil">
  <table class="table table-hover" id="tableHover">
   <caption>Products</caption>
   <thead>
      <tr>
         <th>Item</th>
         <th>Price</th>
         <th>Quantity</th>
      </tr>
   </thead>
   
   
  </table>
   <div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#"></a>
    <ul class="nav">
    <li class="active"><a class="nurten" href= "keyboard.php"  > <?php
         $s="SELECT Name FROM Product WHERE Name='Keyboard'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Name"];
    }
  }

         


        ?> <style type="text/css"></style> <span class="left-space"><?php
         $s="SELECT Price FROM Product WHERE Name='Keyboard'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Price"]."&#8364";
    }
  }

         


        ?></span> <span class="left-sp"> <?php
         $s="SELECT Quantity FROM Product WHERE Name='Keyboard'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Quantity"];
    }
  }

         


        ?></span></a></li>
    <li class="active"><a class="nurten" href= "mouse.php"  ><?php
         $s="SELECT Name FROM Product WHERE Name='Mouse'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Name"];
    }
  }

         


        ?><style type="text/css"></style> <span class="left-space1"><?php
         $s="SELECT Price FROM Product WHERE Name='Mouse'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Price"]."&#8364";
    }
  }

         


        ?></span><span class="left-sp1"><?php
         $s="SELECT Quantity FROM Product WHERE Name='Mouse'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Quantity"];
    }
  }

         


        ?></span></a></li>
    <li class="active"><a class="nurten" href= "headphones.php"  ><?php
         $s="SELECT Name FROM Product WHERE Name='Headphones'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Name"];
    }
  }

         


        ?> <style type="text/css"></style> <span class="left-space2"><?php
         $s="SELECT Price FROM Product WHERE Name='Headphones'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Price"]."&#8364";
    }
  }

         


        ?></span><span class="left-sp2"><?php
         $s="SELECT Quantity FROM Product WHERE Name='Headphones'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Quantity"];
    }
  }

         


        ?></span></a></li>
    <li class="active"><a class="nurten" href= "cooler.php"  ><?php
         $s="SELECT Name FROM Product WHERE Name='Cooler'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Name"];
    }
  }

         


        ?><style type="text/css"></style> <span class="left-space3"><?php
         $s="SELECT Price FROM Product WHERE Name='Cooler'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Price"]."&#8364";
    }
  }

         


        ?></span><span class="left-sp3"><?php
         $s="SELECT Quantity FROM Product WHERE Name='Cooler'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Quantity"];
    }
  }

         


        ?></span></a></li>
    <li class="active"><a class="nurten" href= "camera.php"  ><?php
         $s="SELECT Name FROM Product WHERE Name='Camera'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Name"];
    }
  }

         


        ?> <style type="text/css"></style> <span class="left-space4"><?php
         $s="SELECT Price FROM Product WHERE Name='Camera'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Price"]."&#8364";
    }
  }

         


        ?></span><span class="left-sp4"><?php
         $s="SELECT Quantity FROM Product WHERE Name='Camera'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Quantity"];
    }
  }

         


        ?></span></a></li>
    <li class="active"><a class="nurten" href= "speaker.php"  ><?php
         $s="SELECT Name FROM Product WHERE Name='Speaker'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Name"];
    }
  }

         


        ?> <style type="text/css"></style> <span class="left-space5"><?php
         $s="SELECT Price FROM Product WHERE Name='Speaker'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Price"]."&#8364";
    }
  }

         


        ?></span><span class="left-sp5"><?php
         $s="SELECT Quantity FROM Product WHERE Name='Speaker'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Quantity"];
    }
  }

         


        ?></span></a></li>

    

    
    </ul>
    </div>
    </div>
  </font>
  </div>
  </script>
  </script>
  </script>
  
  </form>
  <?php
  mysql_close($conn);

  ?>
	</body>
  <p id="hak"> 

  <small>Copyright &copy; All rights reserved.
  </small>
  </p>
	</html>
