<?php
    $db = require('connect.php');

    $comment = htmlspecialchars($_POST['comment'] , ENT_QUOTES, 'utf-8');
    $sql = "INSERT INTO review VALUES (NULL, '$comment')";
    $db->query($sql);

    header("location:stored.php");
    exit(0);
?>