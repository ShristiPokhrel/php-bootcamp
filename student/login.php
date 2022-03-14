<?php
include("../config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];

    $sql = "SELECT id, username FROM student WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);

    if($count == 1) {
        $username = $row['username'];
        $_SESSION['username'] = $username;

        header("location: welcome.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>

<form action = "" method = "post">
    <label>UserName  :</label><input type = "text" name = "username" /><br /><br />
    <label>Password  :</label><input type = "password" name = "password" /><br/><br />
    <input type = "submit" value = " Submit "/><br />
</form>