<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="username">
    <input type="text" name="password">
    <input type="submit" >
    </form>
    <?php

$comm=""
foreach($_GET as $key=>$value){
    if($key=="John" && $value=="Rambo"){
       $comm="C'est pas ma guerre"
    }
     else{
        $comm="Votre pire cauchemar";
    }
}
echo $comm;
    ?>
</body>
</html>