<?php
session_start();


if (isset($_POST['dob'])){
    if(empty($_POST['dob'])){
        $_SESSION['error'] = "Please fill the field again";
        header("location: form2.php");
    }
    else{
        $_SESSION['dob'] = $_POST['dob'];
    }
}
    else{
        header("location: form2.php");
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

<form action="form4.php" method="POST">
    <div class="field">
    <input type="tel" id="phn" name="phn" cols="50" pattern="[0-9]{10}" placeholder="Contact Number" autocomplete="off" required>
    </div>
    <div class="container">
    <input type="submit" value="Submit" name="submit">
    </div>
</form>
</body>


</html>

