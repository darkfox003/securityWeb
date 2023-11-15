<?php
    $db = require('connect.php');

    $stmt = $conn->prepare("SELECT * FROM user WHERE name = ? AND password = ?");
    $stmt->bind_param("ss", $_POST['username'], $_POST['password']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header("location:success.php");
        exit(0);
    }
    else {
        header("location:fail.php");
        exit(0);
    }
?>