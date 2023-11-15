<?php
    $db = require('connect.php');

    $sql = "SELECT * FROM review";
    $result = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <div class="content">
        <div class="storedForm">
            <div class="allComment">
                <?php
                    $count = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class=\"commentItem\">" . "Comment" . $count . "<br>" . $row['comment'] . "</div>";
                        $count = $count + 1;
                    }
                ?>
            </div>
            <div class="inputComment">
                <form action="comment.php" method="post" class="commentForm">
                    <label>Input your comment</label>
                    <div class="sub">
                        <textarea name="comment" id="" cols="30" rows="7"></textarea>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>