<?php
$con = mysqli_connect('localhost', 'root', '', 'info');

$email = $_POST['email'];
$userPassword = $_POST['password'];

$result = mysqli_query($con, "SELECT * FROM `cusinfo` WHERE email='$email' AND password='$userPassword'");

session_start();

if (mysqli_num_rows($result)) {
    $_SESSION['user'] = $email;
    echo "<script>alert('Login Successful');
    window.location.href='../My WDP/index.php';
    </script>";
} else {
    echo "<script>alert('Invalid username/password');
    window.location.href='login.php';
    </script>";
}
?>