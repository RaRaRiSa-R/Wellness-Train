<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="css/forgotpassword.css" rel="stylesheet" />
</head>
<body>
    <form method="POST" action="forgotpassword.php">
        <h2>
            <span>FORGOT PASSWORD</span>
        </h2>
        <div class="input-box">
            <label for="email">E-mail</label>
            <input type="text" name="email">
        </div>
        <button type="submit" name="send-reset-link">SEND LINK</button>
    </form>
</body>
</html>