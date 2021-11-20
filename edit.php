<?php

include "db.php";
$id = $message = "";

$sellingprice=$buyingprice=$Name="";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
         $sql = "SELECT * FROM products where id=$id";

         $result = $conn->query($sql);

         if ($result->num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $name = $rows['Name'];
				 $bprice = $rows['buyingPrice'];
				 $sprice = $rows['sellingPrice'];
             }
         } else {
             header("location:display.php");
         }
     } else {
         header("location:display.php");
}

?>

<h3>Update Data</h3>

<form method="POST" action="">
  <input type="text" name="Name" value="<?php echo $name ?>" placeholder="Enter Full Name" Required>
  <input type="number" name="buyingPrice" value="<?php echo $bprice ?>" placeholder="Enter Buying Price" Required>
  <input type="number" name="sellingPrice" value="<?php echo $sprice ?>" placeholder="Enter Selling Price" Required>
  <input type="submit">
</form>

  <?php
                if(count($_POST)>0) {
                  $Name = $_POST['Name'];
                  $buyingprice = $_POST['buyingPrice'];
                  $sellingprice = $_POST['sellingPrice'];
				  echo "dsfsfsdfsfsf";
                                
              
                              $sql = "UPDATE products SET Name='$Name', buyingPrice=$buyingprice, sellingPrice=$sellingprice WHERE id=$id ";
                              mysqli_query($conn, $sql); //data is inserted into the database
							  header("location:display.php");





                }

                

        ?>