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
    $operation="";
function calcule($a, $operation, $b){
    if($operation=="+"){
    return($a + $b);}
    elseif($operation=="-"){
    return($a - $b);
    }
    elseif ($operation=="*") {
    return($a * $b);
    }
    else {
    return($a / $b);}}
//     return($a.$operation.$b);
// }

    

$calcule=calcule(9,"/",8);
echo $calcule;


    ?>
</body>
</html>