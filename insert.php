<!DOCTYPE html>
<html>
<head>
      <title>Insert</title>
      
</head> 
<body>
      <!--container-->
      <div class="container">
      <form method="post" action="insert.php">
        <h1 class="neon"> Add Product </h1>
        
        <div class="textbox">
          <i class="fa fa-user-circle-o" aria-hidden="true"></i>
          <input type="text" placeholder="Name"  name="Name" required>
        </div>
        <div class="textbox">
          <i class="	fa fa-user-circle-o" aria-hidden="true"></i>
          <input type="text" placeholder="Buying Price"  name="buyingprice" required>
        </div>
        <div class="textbox">
          <i class="fa fa-user-circle-o" aria-hidden="true"></i>
          <input type="text" placeholder="Selling price"  name="sellingprice" required>
        </div>
      
            
        <div>
          <br>
          <div class="center" >
            <input type="checkbox" name="Remember"><i id="rem"> Display </i>     
          </div>

            <?php
                $conn = mysqli_connect("localhost", "root", "", "product_db");
                if(isset($_POST['submit'])) {
                  session_start();
                  $Name = $_POST['Name'];
                  $buyingprice = $_POST['buyingprice'];
                  $sellingprice = $_POST['sellingprice'];
                                
              
                              $sql = "INSERT INTO products(Name, buyingPrice, sellingPrice) VALUES('$Name', '$buyingprice', '$sellingprice')";
                              mysqli_query($conn, $sql); //data is inserted into the database





                }

                

        ?>

        <b>  <input type="submit" name="submit" value="Save"><b>
    
        </div>            
      </form>
   
        </div>
       
    </body>
<html>
