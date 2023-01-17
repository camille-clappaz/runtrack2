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
function leetSpeak($str){
    for($i=0; isset($str[$i])==true; $i++){
    if($str[$i]== "A" || $str[$i]== "a"){
        return $str[$i]=4;
    }}
}
$leet=leetSpeak("charade");
echo $leet;
    ?>
</body>
</html>