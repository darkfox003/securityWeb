<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <div class="form">
            <h1>Login Form</h1>
            <form class="loginForm" action="login.php" method="post">
                <div class="group">
                    <label>Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="group">
                    <label>Password</label>
                    <div class="sub">
                        <input size="20" type="password" name="password" id="password">
                        <button type="button" onclick=changeType()>change</button>
                    </div>
                </div>
                <button class="submit" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
<script >
    function changeType() {
        var pass = document.getElementById("password");

        if (pass.type == 'password')
            pass.type = 'text';
        else 
            pass.type = 'password';
    }
</script>
</html>