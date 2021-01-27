<?php
session_start();


if (isset($_POST['name'])){
    if(empty($_POST['name'])){
        $_SESSION['error'] = "Please fill the field again";
        header("location: form.php");
    }
    else{
        $_SESSION['name'] = $_POST['name'];
    }
}
    else{
        header("location: form.php");
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

<form action="form3.php" method="POST">
    <div class="field">
    <input type="date" id="dob" name="dob" cols="50" placeholder="01/01/2000" autocomplete="off" required>
    </div>
    <div class="container">
    <input type="submit" value="Submit" name="submit">
    </div>
</form>
</body>


</html>

