<?php

require_once "header.php";
require_once "connection.php";
if(!isset($_SESSION['auth'])){
    header("location: login.php");
}
// if(!empty($_POST))
// {
//     $Productname = $_POST['Productname'];
//     $price = $_POST['price'];
//     $quantity = $_POST['quantity'];
//     $color = $_POST['color'];
//     $sql="INSERT INTO addproduct(Productname,price,quantity,color) values('$Productname','$price','$quantity','$color')";
//     $result=mysqli_query($conn,$sql);
//     if($result)
//         {
//         echo"products add successfully";
//         }
//         else
//         {
//         echo"products  not add successfully";
//         }
    
// }
?>
<h1>welcome to add products from category</h1>
<form action="" method="post">
Product Name: <input type="text" name="Productname" required><br>
price: <input type="number" name="price" required><br>
quantity: <input type="number" name="quantity" required><br>
color: <input type="text" name="color" required><br>


<button>add products</button>
</form>


<?php

require_once "footer.php";

?>
