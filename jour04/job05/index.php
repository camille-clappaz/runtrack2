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


foreach($_POST as $key=>$value){
    if($_POST["username"]="John" && $_POST["password"]=="Rambo"){
       echo "C'est pas ma guerre";
       break;
    }
    elseif($value != ""){
       echo "Votre pire cauchemar";
       break;
    }
     else{
        echo "";
    }

}
// echo $comm;  
// echo "";


    ?>
</body>
</html>