
<?php
include "db.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
        $sql = "DELETE FROM products WHERE id = $id";

        if ($conn->query($sql)) {


                header("location:display.php");
            } else {
                die($conn->error);
            }
        } else {
            die($conn->error);
        }
    header("location:display.php");

?>