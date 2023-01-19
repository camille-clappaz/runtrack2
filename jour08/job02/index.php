<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    // setcookie("nbvisites",0);
  
    // if(isset($_POST["reset"]))
    //     session_destroy();
    // if(!isset($_COOKIE["nbvisistes"]))
    // setcookie("nbvisites",0);
    // else
    // setcookie("nbvisites",+1);

    // echo  $_COOKIE["nbvisites"];
  

    <?php
    setcookie("utilisateur", "nbvisites", time());

    if (isset($_COOKIE['nbvisites'])) { 
        setcookie('nbvisites', $_COOKIE['nbvisites'] + 1);  
        echo $_COOKIE['nbvisites'] + 1;
    }

    if (isset($_GET['reset'])) {
        setcookie('nbvisites', 0);
    }
    
    ?>

    
<form action="" method="get">
        
    <input type="submit" name="reset" value="Reset">
    
</form>
    <form action="" method="POST">
        <input type="submit" name="reset" value="reset">
    </form>
    
    
</body>
</html>