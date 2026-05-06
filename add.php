<?php
include_once "db.php";

$msg = "";

if(isset($_POST['submit'])) {
    $question = $_POST['question'];
    $option1  = $_POST['option1'];
    $option2  = $_POST['option2'];
    $option3  = $_POST['option3'];
    $option4  = $_POST['option4'];
    $answer   = $_POST['answer'];

    $sql = "INSERT INTO questions (question, option1, option2, option3, option4, answer) 
            VALUES ('$question','$option1','$option2','$option3','$option4','$answer')";

    if(mysqli_query($conn, $sql)) {
        $msg = "✅ Quiz Added Successfully!";
    } else {
        $msg = "❌ Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Quiz</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px;
            margin: 60px auto;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: #2a5298;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        textarea {
            resize: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #2a5298;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #1e3c72;
        }

        .msg {
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #2a5298;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>➕ Add Quiz Question</h2>

    <?php if($msg != "") { echo "<div class='msg'>$msg</div>"; } ?>

    <form method="post">
        <textarea name="question" placeholder="Enter Question" required></textarea>

        <input type="text" name="option1" placeholder="Option 1" required>
        <input type="text" name="option2" placeholder="Option 2" required>
        <input type="text" name="option3" placeholder="Option 3" required>
        <input type="text" name="option4" placeholder="Option 4" required>

        <input type="text" name="answer" placeholder="Correct Answer (Write Option Value)" required>

        <button type="submit" name="submit">Add Quiz</button>
    </form>

    <a href="dashboard.php" class="back">⬅ Back to Dashboard</a>
</div>

</body>
</html>