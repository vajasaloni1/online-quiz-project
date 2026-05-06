<?php
session_start();
include_once "db.php";

$q = mysqli_query($conn,"SELECT * FROM questions");
$score=0;
$total=mysqli_num_rows($q);

while($row=mysqli_fetch_assoc($q)){
    $id=$row['id'];
    if(isset($_POST["q$id"]) && $_POST["q$id"]==$row['answer']){
        $score++;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Result</title>

<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Segoe UI;
    background:linear-gradient(135deg,#7c2d12,#f97316);
}

.box{
    padding:30px;
    background:rgba(255,255,255,0.1);
    color:white;
    border-radius:15px;
    text-align:center;
}
</style>

</head>
<body>

<div class="box">
<h1>Your Score</h1>
<h2><?php echo "$score / $total"; ?></h2>
<a href="dashboard.php">Back</a>
</div>

</body>
</html>