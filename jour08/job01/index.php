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
    session_start();
    
    if(isset($_POST["reset"]))
        session_destroy();
    if(!isset($_SESSION["nbvisistes"]))
    $_SESSION["nbvisistes"]=0;
    else
    $_SESSION["nbvisistes"]=$_SESSION["nbvisistes"]+1;
    echo  $_SESSION["nbvisistes"];
  

   
    ?>
    <form action="" method="POST">
        <input type="submit" name="reset" value="reset">
    </form>
</body>
</html>