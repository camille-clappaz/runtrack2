<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="nombre">
        <button type="submit">Clique!!</button>

       
    </form>
    <?php
    foreach($_GET as $key=>$value){
 if($value==""){
    echo "";
 }
 
 elseif($value%2==0){
    echo "Nombre pair";    
 }
 else{
    echo "Nombre impair";
 }
 
}

    ?>
</body>
</html>