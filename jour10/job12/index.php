<?php
$mysqli=new mysqli("localhost", "root", "", "jour09");
if( $mysqli->connect_error ) {
    echo "erreur de connexion a MySQL:" .$mysqli -> connect_error;
    exit();
}
$request=$mysqli->query("SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE `naissance` BETWEEN '1998-01-01' AND '2018-01-01'");
$result=$request->fetch_all(MYSQLI_ASSOC);
// var_dump($result);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table >
    <thead >
        <tr >
            <?php foreach($result[0] as $key=> $value): ?>
                <th >
                    <?= $key ?>
                </th>
                <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0; $i < sizeof($result); $i++):?>
       <tr >
       <td><?=$result[$i]["prenom"]?></td>
       <td><?=$result[$i]["nom"]?></td>
       <td><?=$result[$i]["naissance"]?></td>
       
      
       </tr>
       <?php endfor; ?>
    </tbody>
</table>  
<style>
    table{
        border-collapse: collapse;
    }
    td, th{
        padding: 10px;
        border: 2px solid black;
        
    }
</style>

</body>
</html>