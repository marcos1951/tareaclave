<?php
$usuario = $_POST["usuario"];  
$password = $_POST["password"];

if ($usuario=="marcos" && $password=="12345") 
{ 
$valido=true; 
} 
else 
{ 
$valido=false; 
} 

?> 

<html> 
<head> 
<title>Pagina privada</title> 
</head> 
<body> 
<?php
if ($valido) 
{ 
?> 
<p>BIENVENIDO A LA WEB</p> 
<?php } 
else 
{ 
?> 
<p>USUARIO O CONTRASEÑA INCORRECTA</p> 

<?php 
} 
?>