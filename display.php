<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>



<table border="2">
  <tr>
    <td>Name.</td>
    <td>Profit </td>
    <td>Edit</td>
    <td>DELETE</td>

    
  </tr>

<?php

include "db.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from products"); // fetch data from database
$records = mysqli_query($conn,"SELECT id, Name, (sellingPrice-buyingPrice) AS profit FROM products");
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Name']; ?></td>
    

<td>  

<?php echo $data['profit']; ?>

</td> 




    <td><a href="edit.php?id=<?php echo $data["id"]; ?>">Update</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr> 
<?php
}
?>
</table>

</body>
</html>