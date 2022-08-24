<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="trail_database";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['send']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql_query = "INSERT INTO trail_database (name,email,message)
    VALUES ('$name','$email','$message')"; 

    if (mysqli_query($conn, $sql_query))
    {
        echo "New Details Entry inserted successfully !";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>