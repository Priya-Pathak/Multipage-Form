<?php
session_start();


if (isset($_POST['message'])){
    if(empty($_POST['message'])){
        $_SESSION['error'] = "Please fill the field again";
        header("location: form5.php");
    }
    else{
        $_SESSION['message'] = $_POST['message'];
    }
}
    else{
        header("location: form5.php");
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

<form action="form7.php" method="POST">
    <div class="field">
    <label for="cars">Choose a car:</label>
    <select id="cars" name="cars" required>
    <option value="volvo">Volvo</option>
     <option value="saab">Saab</option>
     <option value="fiat">Fiat</option>
     <option value="audi">Audi</option>
    </select>
    </div>
    <div class="container">
    <input type="submit" value="Submit" name="submit">
    </div>
</form>
</body>


</html>

