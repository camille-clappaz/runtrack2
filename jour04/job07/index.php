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
        <input type="text" placeholder ="largeur" name="largeur">
        <input type="text" placeholder ="hauteur" name="hauteur">
        <button type="submit">Clique ici!!</button>
    </form>
    <?php
$hauteur= $_GET["hauteur"];
$largeur= $_GET["largeur"];
//triangle avec hauteur et largeur dynamique//
for($i=0; $i<$hauteur;$i++){
    // for($z=0; $z<$largeur; $z++){
    //     echo "";
    // } 
    for($k=0; $k<=$i; $k++){
        echo "*";
        
    }
    echo "</br>";
}

//Pour faire un rectangle avec hauteur et largeur dynamiques//
for ($i = 0; $i < $hauteur; $i++)
{
for ($k = 0; $k < $largeur; $k++)
{echo "*";}
echo "<br />";
}



?>
    
</body>
</html>