<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $str="On n’est pas le meilleur quand on le croit mais quand on le sait";
   $dic=[
    ['voyelles'=>'a',eiouyO']
   ];
   $voyelles=0;
   $consonnes=0;
   for($i=0; isset($str[$i])==true; i++){
foreach($dic as $voyelles){
    if($str[$i]==$dic[$voyelles])
    {
    }
    $voyelles=$i;
}
   }
   ?>
   <table>
    <thead>
        <tr>
            <th>Consonnes </th>
            <th>Voyelles</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$consonnes?></td>
            <td><?=$voyelles?></td>
        </tr>
    </tbody>
   </table>
</body>
</html>