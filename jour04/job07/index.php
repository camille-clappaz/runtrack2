<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" placeholder ="largeur" name="largeur">
        <input type="text" placeholder ="hauteur" name="hauteur">
        <button type="submit">Clique ici!!</button>
    </form>
    <?php
$hauteur= $_GET["hauteur"];
$largeur= $_GET["largeur"];
$i="*";
for ($i = 0; $i < $hauteur; $i++){}
// {echo $i};
echo $i;
// echo str_repeat('&nbsp;',($hauteur-$i));
// for($j = 0; $j <= $i; $j++)
// {
// echo "* ";
// }
// echo "<br />";
// }
    ?>
</body>
</html>