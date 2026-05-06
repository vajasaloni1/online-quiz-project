<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Segoe UI;
    background:linear-gradient(135deg,#4c1d95,#1e1b4b);
}

.card{
    width:400px;
    padding:30px;
    background:rgba(255,255,255,0.08);
    border-radius:15px;
    color:white;
    text-align:center;
}

a{
    display:block;
    margin:10px;
    padding:12px;
    background:#8b5cf6;
    color:white;
    text-decoration:none;
    border-radius:10px;
}
</style>

</head>
<body>

<div class="card">
<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<a href="quiz.php">Start Quiz</a>
<a href="logout.php">Logout</a>
</div>

</body>
</html>