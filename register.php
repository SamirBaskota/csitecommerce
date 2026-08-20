<?php

require_once "header.php";
require_once "connection.php";
if(!empty ($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =md5($_POST['password']);
    $gender = $_POST['gender'];
    $sql="INSERT INTO users(name,email,password,gender)
        values('$name','$email','$password','$gender')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo"account created";
        }
        else{
            echo"account not created";
        }
    
}



?>


<h1>register page</h1>



    
    <form action="" method="post">
        name :<input type="text" name="name" required> <br>
        email: <input type="email" name="email" required> <br>
        password: <input type="passowrd" name="password" required> <br>
        gender: <select name="gender" id="" required>
            <option value="">select gender</option>
            <option value="male">male</option>
            <option value="female">female</option>
            <option value="other">other</option>
        </select> <br>
        <button>create account</button>
    </form>
<?php

require_once "footer.php";

?>
