<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <form action="signon" method="post">

    Username:<input type="text" name="user"> <br>

    Password:<input type="password" name="pwd"><br>

    @csrf

    <button type="submit">Login</button>

</form>
</body>
</html>
