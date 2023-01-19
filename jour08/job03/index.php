<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="">
        <input type="text" name="prenom" value="">
        <button type="submit">Valider</button>
    </form>
    
  
    <ul>
    <li> <?php
//     session_start();
//     $_SESSION["user"]="";
// if(isset($_GET["prenom"]))
// $_SESSION["user"]=$_GET["prenom"];
// foreach($_GET as $key=>$value)
// echo $_SESSION["user"];
    ?></li>
    </ul> -->
    <?php

session_start();

if (!isset($_SESSION['name'])) 
{
    $_SESSION['name'] = [];
}

if (isset($_POST['reset'])) 
{
    $_SESSION['name'] = [];
    $_POST['reset'] = '';
}

if (
    isset($_POST['prenom']) && $_POST['prenom'] != '' && $_POST['prenom'] !== end($_SESSION['name']))
     {
    array_push($_SESSION['name'], $_POST['prenom']);
}

?>
<form action="" method="post">
    <input type="text" name="prenom" id="">
    <input type="submit">
    <input type="submit" name="reset" value="Reset">
</form>

<div>
    <ul>
        <?php
        foreach ($_SESSION['name'] as $key => $val) {
            echo "<li>.$val.</li>";
        } ?>
</div>
</body>
</html>