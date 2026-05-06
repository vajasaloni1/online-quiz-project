<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<title>Logout</title>

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
    width:320px;
    padding:30px;
    text-align:center;
    color:white;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(248,113,113,0.4);
    border-radius: 18px;
    backdrop-filter: blur(12px);
    box-shadow: 0 0 25px rgba(248,113,113,0.3);
    animation: fadeIn 0.8s ease-in-out;
}

h2{
    color:#f87171;
    margin-bottom:10px;
}

p{
    margin-bottom:20px;
    color:#cbd5e1;
}

a{
    display:inline-block;
    padding:10px 20px;
    background: linear-gradient(90deg,#ef4444,#f97316);
    color:white;
    text-decoration:none;
    border-radius:10px;
    transition:0.3s;
}

a:hover{
    transform:scale(1.05);
    box-shadow:0 0 15px #ef4444;
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
    <h2>Logging Out...</h2>
    <p>You have been successfully logged out.</p>

    <a href="index.php">Go to Login</a>
</div>

<?php
// Auto redirect after 2 seconds
header("refresh:2;url=index.php");
exit();
?>

</body>
</html>