<?php
/*
Le but est de rentrer un nombre en chiffres arabes et de le convertir en chiffres romains 
I => 1
V => 5
X => 10
L => 50
C => 100
M => 1000
*/
function conv(int $x)
{
        $chiffreRomain = "";
        $correspondances = [["M", 1000], ["CM", 900], ["D", 500], ["CD", 400], ["C", 100], ["XC", 90], ["L", 50], ["XL", 40], ["X", 10], ["V", 5], ["IV", 4], ["I", 1]];

        function extraireChiffreRomain($lettre, $valeurLettre)
        {
                global $chiffreRomain, $x;
                while ($x >= $valeurLettre) {
                        $x -= $valeurLettre;
                        $chiffreRomain += $lettre;
                }
        }
        foreach ($correspondances as $correspondance) {
                extraireChiffreRomain($correspondance[0], $correspondance[1]);
        }
}

$erreur="";
if(isset($_POST['chiffre']){
        $chiffre = $_POST['chiffre'];
if($chiffre>8999 || $chiffre<1){
        $erreur+="Veuillez rentrer un chiffre compris entre 1 et 8999.";
}elseif(is_int($chiffre)){
        $erreur+="Veuillez rentrer un nombre entier.";
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conversion en chiffre Romain</title>
</head>
<body>
<div>
        <form action="#" method="POST">
        <label for="chiffre">Veuillez rentrer un chiffre arabe compris entre 1 et 8999 : <input type="text" id="chiffre" name="chiffre"></label>
        </form>
</div>
</body>
</html>

