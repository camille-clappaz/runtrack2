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
    
function occurences($str,$char){
    $occ=0;
    for($i=0; isset($str[$i]); $i++){
        if($char==$str[$i]){
            $occ++;
        }
    }
    return ($occ);
}
echo occurences("chat","l");

    ?>
</body>
</html>