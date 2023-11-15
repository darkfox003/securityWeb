<?php
    $db = require('connect.php');
    $auth = $_COOKIE['auth'];
    $sql = "SELECT * FROM bank WHERE auth = '$auth'";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();

    session_start();
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <div class="content">
        <div class="bankMain">
            <h2>Withdraw Money</h2>
            <form class="bankForm" action="transfer.php" method="post">
                <label>Amount</label>
                <div class="sub">
                    <input type="number" name="amount" id="">
                    <input type="hidden" name="csrf" value=<?php echo $_SESSION['csrf_token']; ?>>
                    <button type="submit">Deposit</button>
                </div>
            </form>

            <div class="balance">
                <h2>Bank Account : <?php echo $row['name']; ?> <br> Balance : <?php echo $row['balance']; ?></h2>
            </div>
        </div>
    </div>
</body>
<script>
    document.cookie = "auth=UserCookie;";
</script>
</html>