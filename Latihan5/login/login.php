<?php
if( isset($_POST["submit"])){
    if( $_POST["username"] == "admin" && $_POST["password"] == "123"){
        header("Location: admin.php");
        exit;
    }else {
        $error = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
<?php if( isset($_error)): ?>
    <p>username / password salah!</p>
<?php endif; ?>
<ul>
    <form action="admin.php" method="post">
    <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">Username :</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <button type="submit" name:"submit">Login</button>
    </li>
    </form>
</ul>
</body>
</html>