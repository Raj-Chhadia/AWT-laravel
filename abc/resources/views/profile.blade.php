<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profile Page</h1>
    <h3>Welcome {{session('data')['user']}}</h3> 
    <!-- Displays the Username sent via POST and Session -->
    <br>
    <a href="logout">Logout</a>  
    <!-- Clicking Logout removes session and redirects to signin page -->
</body>
</html>