<?php
$to = " ";
$subject = "Contact from the website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['text'];
$sport = $_POST['sport'];
$married = $_POST['married'];
$country = $_POST['country'];
$car= $_POST['car'];

<html>
<head>
<title>HTML</title>
</head>
<body>
<h1>Información del formulario</h1>
<p>name:$name </p> 
<p>Email: $email </p> 
<p>comments: $comments </p> 
<p>sport: $sport </p>
<p>married: $married </p>
<p>country: $country</p>
<p>car: $car</p>


</body>
</html>
Gracias por comunicarse con nosotros';
?>
