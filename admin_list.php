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
function get_products(){
      $query="SELECT * FROM Product";
      $data=mysql_query($query,$conn);
      $Product=array();
      while ($object=mysql_fetch_object($data)) {
        $Product[]=$object;
      }
      return $Product;

    }
      function get_table(){
        $table_str='';
        $Product=get_products();
        foreach ($Product as $product) {
          $table_str.=''.$product->product_name;
        }
        return $table_str;

      }
?>



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
  
 <form class="form"action="login.php">
 

<img src="shop.jpg">
	<div  class="container">
	<p id="onur">IDEUS STORE
  
<span class="glyphicon glyphicon-log-out" id="metin" aria-hidden="true"></span>
  </p> 



<button class="btn btn-lg btn-danger" id="yer">Exit</button>

</form>

  
  <p class="italic">Welcome to IDEUS Store</p>
  <p class="admin"><b>Administrator Account
  </b>
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
  <li class="active" id="renk"><a href="admin_list.php">Home</a></li>
  
  </ul>
  </div>
   <div>
  <ul class="nav navbar-nav">
  <li id="load_money1"><a href="money.php">Add Product</a></li>
  </ul>
  </div>
    <div>
  <ul class="nav navbar-nav">
  <li id="load_money1"><a href="history.php">Remove Product</a></li>
  </ul>
  </div>
  </div>
  </nav>
  <font id="celil">
  
  </font>
  </div>
  </script>
  </script>
  </script>
  </div>

  </form>
  <?php
  echo get_table();
//mysql_close($conn);
  ?>
	</body>
  <p id="hak"> 

  <small>Copyright &copy; All rights reserved.
  </small>
  </p>
	</html>
