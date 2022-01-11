<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo 143</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
// Exercice 1

$true = function(){
    return true;
};

$true();

// Exercice 2

function chaine ($chaineCaractere){
    echo $chaineCaractere."<br>";
}

chaine("Ma chaîne de caractère");

// Exercice 3

function chaine2 ($chaine1, $chaine2){
    echo $chaine1 . "" . $chaine2 ."<br>";
}

chaine2("Chaine 1 ", "Chaine 2");

// Exercice 4

function number ($nbr1, $nbr2){
    if ($nbr1 > $nbr2) {
        echo "$nbr1 est plus grand que $nbr2 <br>";
    }
    elseif ($nbr1 < $nbr2) {
        echo "$nbr1 est plus petit que $nbr2 <br>";
    }
    else {
        echo "Les deux nombre sont égaux" . "<br>";
    }
};

number(10, 10);

// Exercice 5

function chnNbr ($string, $number){
    echo $string ." ". $number . "<br>";
}

chnNbr("Mon nombre", 15);

// Exercice 6
function user ($name, $firstname, $age){
    echo "Bonjour $name $firstname, tu as $age ans" . "<br>";
}

user("Hanotiau", "Stefan", 28);

// Exercice 7

function major ($age, $gender){
    if ($age < 18 && $gender === "Homme") {
        echo "Je suis un homme et je suis mineur" . "<br>";
    }
    elseif ($age >= 18 && $gender === "Homme"){
        echo "Je suis un homme et je suis majeur" . "<br>";
    }
    elseif ($age < 18 && $gender === "Femme"){
        echo "Je suis une femme et je suis mineur" . "<br>";
    }
    elseif ($age >= 18 && $gender === "Femme") {
        echo "Je suis une femme et je suis majeur" . "<br>";
    }
};

major(28, "Homme");

// Exercice 8

function addition ($nbr1 = 2, $nbr2 = 4, $nbr3 = 6) {
    echo $nbr1 + $nbr2 + $nbr3;
};

addition();

?>

</body>
</html>