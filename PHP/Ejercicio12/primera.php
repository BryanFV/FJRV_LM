<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
<p>
 <?php
 
 
if (iseet($_COOKIE['nombreUsu'])){
    print "Hola" . $_COOKIE['nombreUsu'];
}else{
    print "Hola anonimo";
}
    
 
 
 ?>
</p>
<p> <a href="segunda.php">Ir a segunda</a></p>

</body>
</html>