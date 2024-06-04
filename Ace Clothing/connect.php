<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "info";

    if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['number'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $userPassword = $_POST['password'];
        $number = $_POST['number'];
        $con = new mysqli($servername, $username, $password, $dbname);
        if ($con->connect_error) {
            die("Connection Failed: " . $con->connect_error);
        } else {
            $stmt = $con->prepare("INSERT INTO cusinfo (firstName, lastName, gender, email, password, number) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $userPassword, $number);
            if ($stmt->execute()) {
                echo "Registration successful...";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
            $con->close();
        }
    }
  
?>
