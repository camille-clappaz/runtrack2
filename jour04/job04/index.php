<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
    <input type="text" name="username">
    <input type="text" name="password">
    <input type="text" name="mail">
    <input type="submit" >
    </form>
    <table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>


    <?php
   foreach($_POST as $key=>$value){
    echo "
        <tr>
        <td>$key</td>
        <td>$value</td>
    </tr>"
       ;
   }
    ?>
    </tbody>
</table>
</body>
</html>