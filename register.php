<html>
    <head>
        <title>Register</title>
    </head>
    <style>
        body{
            margin: 0;
        }
        .Register{
            width: 400px;
            margin: 0 auto;
        }
    </style>
    <body>
        <div class="Register">
            <h3>Register</h3>
            <form action="register-process.php" method="post">
                Username: <input type="text" name="username" required><br>
                Password: <input type="password" name="password" required><br>
                <input type="submit" value="Register">
            </form>
        </div>
    </body>
</html>