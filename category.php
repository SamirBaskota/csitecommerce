<?php

require_once "header.php";
require_once "connection.php";
if(!isset($_SESSION['auth'])){
    header("location: login.php");
}
if(!empty($_POST))
{
    $name = $_POST['name'];
    $sql="INSERT INTO category(name) values('$name')";
    $result=mysqli_query($conn,$sql);
    if($result)
        {
        echo"category add successfully";
        }
        else
        {
        echo"category  not add successfully";
        }
    
}
?>


<h1>welcome to our category section</h1>
<form action="" method="post">
Name: <input type="text" name="name" required><br>
<button>add category</button>
</form>


<?php

require_once "footer.php";

?>
