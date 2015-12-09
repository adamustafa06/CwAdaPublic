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
  
     <div class="alert alert-info" id="burgaz"> Item <span class="sol">Price</span><span class="sol1">Quantity</span><span class="sol2">Total</span>
    </div>

   <span class="sol8"><?php
         $s="SELECT Name FROM Product WHERE Name='Camera'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
        echo $row["Name"];
  
}}
         


        ?></span><span class="sol4"><?php
         $s="SELECT Price FROM Product WHERE Name='Camera'";
        $r= $conn->query($s);
        if ($r->num_rows > 0) {
    // output data of each row
    while($row = $r->fetch_assoc()) {
         $nazim=$row["Price"]."&#8364";
        echo $nazim;
    

         


        ?></span>
       
       <span class="sol3">
         <?php

 if(isset($_POST['formSubmit'])) 
    {
        $aC = $_POST['formC'];
        
        if(!isset($aC)) 
        {
            echo("<p>You didn't select any quantity</p>");
        } 
        else 
        {
            $nC = count($aC);
            
           
            
            
                
          
              for($i=0; $i < $nC; $i++)
                {
       
             $nazim1 = $aC[$i];
             }
        
      echo $nazim*$nazim1."&#8364";
                
            
            
            
        }
    }
    
    
?>
       </span>
 <div class="alert alert-info" id="lburgaz">  <span class="sol6">Sub Total</span><span class="sol7">
   
   <?php

 if(isset($_POST['formSubmit'])) 
    {
        $aC = $_POST['formC'];
        
        if(!isset($aC)) 
        {
            echo("<p>You didn't select any quantity</p>");
        } 
        else 
        {
            $nC = count($aC);
            
           
            
            
                
          
              for($i=0; $i < $nC; $i++)
                {
       
             $nazim1 = $aC[$i];
             }
        
      echo $nazim*$nazim1."&#8364";
                
            
            
            
        }
    }
    }
  }
    
?>
 </span></div>

  </div>
  </script>
  </script>
  </script>

  
  </form>
  <form action="list.php">
  <button class="btn btn-lg btn-danger" id="h">Home</button>
  </form>
   <form action="list.php" method="post" id="al" >
  
 <input type="submit" name="cashSubmit" value="Pay with cash" id="cenk"class="btn btn-lg btn-danger">


</form>
  <span class="sol5">

<form action="camera.php" method="post">
         <?php
 $sql7="INSERT INTO Buy (User_id, Product_id) VALUES
    ( (SELECT ID from User WHERE Password='$userP'),(SELECT id from Product WHERE Name='Camera') )";
$res7=$conn->query($sql7);
?>
    <select name="formC[]">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      
    </select><br>

    <input type="submit" name="formSubmit" value="Submit" id="oh">
</form>

 


<?php
 session_start();
 
$userP=$_SESSION['login'];
$sql = "SELECT Amount FROM User WHERE Password='$userP'";
$result = $conn->query($sql);
 $amo = $nazim*$nazim1;

if ($result->num_rows > 0) {
    // output data of each row

   while($row = $result->fetch_assoc()) {  
       
        $row_amount=$row["Amount"];
    }
    if ($row_amount<20 || $amo>$row_amount) {

        header('Location:error_amount.php');
    }
  else{
        
 $sql8 = "UPDATE User SET Amount=Amount-'$amo' WHERE Password='$userP'" ;
 $mustafa = "UPDATE Product SET Quantity=Quantity-'$nazim1' WHERE Name='Camera'";
$result8 = $conn->query($sql8);
$res = $conn->query($mustafa);


      }
         
  }
  $sql7="INSERT INTO Buy (User_id, Product_id) VALUES
    ( (SELECT ID from User WHERE Password='$userP'),(SELECT id from Product WHERE Name='Camera') )";
$res7=$conn->query($sql7);
      
mysql_close($conn);

 ?>
  </body>
  
  <p id="hak"> 

  <small>Copyright &copy; All rights reserved.
  </small>
  </p>
  </html>

