<?php
session_start();


if (isset($_POST['gender'])){
    if(empty($_POST['gender'])){
        $_SESSION['error'] = "Please fill the field again";
        header("location: form4.php");
    }
    else{
        $_SESSION['gender'] = $_POST['gender'];
    }
}
    else{
        header("location: form4.php");
    }

?>
<!DOCTYPE html>
<html lang="en-us">


<head>
<title>
Form
</title>

<link rel="stylesheet" href="form.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
<div class = "header"><h1>F &nbsp; O &nbsp; R &nbsp; M </h1></div>

<span id="error">
 <!---- Initializing Session for errors --->
 <?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>

<form action="form6.php" method="POST">
    <div class="field">
    <br>
    <textarea name="message" rows=10 cols=50 required>
    </textarea>
    </div>
    <div class="container">
    <input type="submit" value="Submit" name="submit">
    </div>
</form>
</body>


</html>
