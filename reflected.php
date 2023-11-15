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
        <div class="searchMain">
            <h1>Searching : <?php echo htmlspecialchars($_GET['search'] , ENT_QUOTES, 'utf-8')?></h1>
            <a href="search.php">Back to Search</a>
        </div>
    </div>
</body>
</html>