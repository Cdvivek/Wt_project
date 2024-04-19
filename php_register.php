<?php

$con = mysqli_connect('localhost::3306', 'root', 'Vivek@12345', 'wt_pract');

if (!$con) {
    die('Error in connectivity');
}

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $mobno = $_POST['mobno'];
    $region = $_POST['region'];


    $sql = "INSERT INTO caregister (email, username, pass, cpass, mobno, region) VALUES ('$email','$uname', '$pass', '$cpass','$mobno','$region')";

    if (mysqli_query($con, $sql)) {
        echo "Data Added Successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
} else {
    echo "Invalid Request!";
}

?>