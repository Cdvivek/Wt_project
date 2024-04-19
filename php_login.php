<?php

$con = mysqli_connect('localhost::3306', 'root', 'Vivek@12345', 'wt_pract');

if (!$con) {
    die('Error in connectivity');
}

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO calogin (username, pass) VALUES ('$uname', '$pass')";

    if (mysqli_query($con, $sql)) {
        // echo "Data Added Successfully!";
        header("Location: courses.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
} else {
    echo "Invalid Request!";
}

?>