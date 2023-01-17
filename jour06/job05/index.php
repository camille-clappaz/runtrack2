<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php
if(isset($_GET['style']) != null){
    echo $_GET['style'];
}
else{
    echo "";
}
?>.css">

</head>
<body>
    <div class="formulaire">
  <form action="">
    <select name="style" >
    <option value="">--Choississez une option--</option>
    <option value="style1">Style1</option>
    <option value="style2">Style2</option>
    <option value="style3">Style3</option>
    
</select><br>
<button type="submit">choisir</button>

</form>
</div>
  
</body>
</html>