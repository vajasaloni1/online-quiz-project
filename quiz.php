<?php
session_start();
include_once "db.php";

$q = mysqli_query($conn,"SELECT * FROM questions");
?>

<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>

<style>
body{
    margin:0;
    padding:30px;
    font-family:Segoe UI;
    background:linear-gradient(135deg,#052e16,#14532d);
    color:white;
}

.box{
    width:650px;
    margin:auto;
    padding:20px;
    background:rgba(255,255,255,0.08);
    border-radius:15px;
}

.option{
    display:block;
    padding:10px;
    margin:8px 0;
    background:rgba(255,255,255,0.1);
    border-radius:8px;
}

button{
    width:100%;
    padding:12px;
    background:#16a34a;
    border:none;
    color:white;
    border-radius:8px;
}
</style>

</head>
<body>

<div class="box">

<form method="POST" action="result.php">

<?php while($row=mysqli_fetch_assoc($q)){ ?>

<p><b><?php echo $row['question']; ?></b></p>

<label class="option"><input type="radio" name="q<?php echo $row['id']; ?>" value="<?php echo $row['option1']; ?>"> <?php echo $row['option1']; ?></label>

<label class="option"><input type="radio" name="q<?php echo $row['id']; ?>" value="<?php echo $row['option2']; ?>"> <?php echo $row['option2']; ?></label>

<label class="option"><input type="radio" name="q<?php echo $row['id']; ?>" value="<?php echo $row['option3']; ?>"> <?php echo $row['option3']; ?></label>

<label class="option"><input type="radio" name="q<?php echo $row['id']; ?>" value="<?php echo $row['option4']; ?>"> <?php echo $row['option4']; ?></label>

<hr>

<?php } ?>

<button>Submit</button>

</form>

</div>

</body>
</html>