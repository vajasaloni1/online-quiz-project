<?php
include "db.php";

if(isset($_POST['register'])){
    $u = $_POST['username'];
    $p = $_POST['password'];

    mysqli_query($conn,"INSERT INTO users(username,password) VALUES('$u','$p')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>

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

.box{
    width:360px;
    padding:30px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(56,189,248,0.4);
    border-radius: 18px;
    backdrop-filter: blur(12px);
    box-shadow: 0 0 25px rgba(56,189,248,0.3);
    color:white;
    text-align:center;
    animation: fadeIn 0.8s ease-in-out;
}

h2{
    margin-bottom:20px;
    color:#38bdf8;
    letter-spacing:1px;
}

input{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:none;
    border-radius:10px;
    outline:none;
    background: rgba(255,255,255,0.08);
    color:white;
    transition:0.3s;
}

input:focus{
    background: rgba(255,255,255,0.15);
    box-shadow: 0 0 10px #38bdf8;
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
    transition:0.3s;
}

button:hover{
    transform: scale(1.05);
    box-shadow: 0 0 15px #22c55e;
}

a{
    display:block;
    margin-top:12px;
    color:#38bdf8;
    text-decoration:none;
}

a:hover{
    text-decoration:underline;
}

@keyframes fadeIn{
    from{
        opacity:0;
        transform: translateY(-20px);
    }
    to{
        opacity:1;
        transform: translateY(0);
    }
}
</style>

</head>
<body>

<div class="box">
    <h2>REGISTER</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>

        <button type="submit" name="register">Create Account</button>
    </form>

    <a href="index.php">Already have account? Login</a>
</div>

</body>
</html>