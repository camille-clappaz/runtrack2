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
   $voyelles=['a','e','i','o','u','y','O'],
   $consonnes=['b','c','d';'f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z']
   ];
   $countvoyelles=0;
   $countconsonnes=0;
   
   for($i=0; isset($str[$i])==true; $i++){
    for($j=0; isset($voyelles[$j])==true; $j++){
    if($str[$i]==$voyelles[$j])
    {
        $countvoyelles++;
    }
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
            <td><?=$countconsonnes?></td>
            <td><?=$countvoyelles?></td>
        </tr>
    </tbody>
   </table>
</body>
</html>