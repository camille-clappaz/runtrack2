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
    $voyelle=['a','e','i','o','u','y', 'I'];
$str="I'm sorry Dave I'm afraid I can't do that";
for($i=0; isset($str[$i])==true; $i++){
    for ($j=0; isset($voyelle[$j])==true; $j++){
    if($str[$i]==$voyelle[$j])
        
             
            {
                echo $str[$i];
            
            }
        }
    }
    ?>
</body>
</html>