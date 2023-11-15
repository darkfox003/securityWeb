<?php

    session_start();
    $auth = $_COOKIE['auth'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $amount = $_POST['amount'];

        if (isset($_POST['csrf']))
            $csrf = $_POST['csrf'];
        else 
            $csrf = NULL;

        if (verifyCSRF($csrf)) {
            makeTransfer($auth, $amount);
            header("location:bank.php");
            exit(0);
        }
        else {
            echo "<script>alert('Invalid Request!!'); window.location.href='bank.php';</script>";
        }
    }

    function verifyCSRF($csrf) {
        if ($csrf == NULL)
            return false;
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $csrf);
    }

    function makeTransfer($auth, $amount) {

        $db = require('connect.php');

        $stmt = $db->prepare("UPDATE bank SET balance = balance - ? WHERE auth = ?");
        $stmt->bind_param("is", $amount, $auth);
        $stmt->execute();
    }

?>