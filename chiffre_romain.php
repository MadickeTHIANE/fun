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
function conv(int $x) {
$chiffreRomain = "";
$correspondances=[["M",1000],["CM",900],["D",500],["CD|",400],["C",100],["XC",90],["L",50],["XL",40],["X",10],["V",5],["IV",4],["I",1]];

function extraireChiffreRomain($lettre, $valeurLettre){
        while ($x>=$valeurLettre){
                $x-=$valeurLettre;
                global $chiffreRomain += "$lettre";
        }
}
foreach($correspondances as $correspondance){
        extraireChiffreRomain($correspondance[0], $correspondance[1]);
}
}
