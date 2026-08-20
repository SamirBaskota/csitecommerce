 <?php
    $host="localhost";
    $user="root";
    $password="";
    $dbname="csitecommerce";
    $conn=mysqli_connect($host,$user,$password,$dbname);
    if(!$conn)
    {
        die("connection failed");
    }
    
    ?>