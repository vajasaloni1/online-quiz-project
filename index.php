<?php
session_start();
include "db.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI', sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: radial-gradient(circle at top, #0f172a, #020617);
}

.container{
    width:360px;
    padding:30px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(56,189,248,0.4);
    border-radius: 18px;
    backdrop-filter: blur(12px);
    box-shadow: 0 0 25px rgba(56,189,248,0.3);
    color:white;
    text-align:center;
}

h2{
    margin-bottom:20px;
    color:#38bdf8;
}

input{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:none;
    border-radius:10px;
    background: rgba(255,255,255,0.08);
    color:white;
}

input:focus{
    box-shadow: 0 0 10px #38bdf8;
    outline:none;
}

button{
    width:100%;
    padding:12px;
    margin-top:10px;
    border:none;
    border-radius:10px;
    cursor:pointer;
    background: linear-gradient(90deg,#3b82f6,#22c55e);
    color:white;
    font-weight:bold;
}

button:hover{
    transform: scale(1.05);
}

a{
    display:block;
    margin-top:12px;
    color:#38bdf8;
    text-decoration:none;
}

.error{
    color:#ff4d4d;
    margin-top:10px;
}
</style>

</head>

<body>

<div class="container">
    <h2>LOGIN</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>

        <button type="submit" name="login">Login</button>
    </form>

    <?php
    if(isset($error)){
        echo "<div class='error'>$error</div>";
    }
    ?>

    <a href="register.php">Create New Account</a>
</div>

</body>
</html>