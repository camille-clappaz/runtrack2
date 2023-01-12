<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="">
<input type="text" name="username">
<input type="text" name="password">
<input type="text" name="mail">
<input type="submit" >
</form>
<?php
$i=0;
foreach($_GET as $key=>$value){
    if($value != "")
    {$i++;}
    } 
echo"Le nombre d'arguments GET envoyé est $i";

    ?>
</body>
</html>