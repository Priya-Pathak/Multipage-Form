<?php
session_start()
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

<form action="form2.php" method="POST">
    <div class="field">
        <input type="text"  name="name" placeholder="Name" cols="50" pattern="[a-zA-Z\s]+" autocomplete="off" required>
    </div>
    <div class="container">
    <input type="submit" value="Submit" name="submit">
    </div>
</form>
</body>


</html>