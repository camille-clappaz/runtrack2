<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$str="vive le code";
$integer=8;
$float=1.2;
$bool=false;
var_dump($float);

    ?>
    <table>
        <thead>
            <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
           <tr>
            <td>Chaîne de caractère</td>
            <td>str</td>
            <td><?=$str;?></td>
           </tr>
           <tr><td>nombre entier</td>
           <td>integer</td>
           <td><?=$integer;?></td></tr>
           <tr><td>nombre décimal</td>
           <td>float</td>
           <td><?=$float;?></td></tr>
           <tr><td>booléen</td>
           <td>bool</td>
           <td><?=$bool;?></td></tr>
        </tbody>
    </table>
</body>
</html>