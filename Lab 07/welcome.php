<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.html');
    exit();
}
?>

<?php include 'header.inc'; ?>

<?php
    echo "Welcome, " . htmlspecialchars($_SESSION['user']);
?>

<?php include 'footer.inc'; ?>