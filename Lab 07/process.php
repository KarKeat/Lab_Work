<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'Cheong Kar Keat' && $password == '106681058'){
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
} else {
    echo "Invalid login. <a href='login.html'>Try again</a>";
}
?>