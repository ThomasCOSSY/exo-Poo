<?php
require "Models/Character.php";
require "Models/Hero.php";
require "Models/Orc.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo-POO</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


    <div class="background">

        <div style="height: 45rem;" id="monster">
            <img src="assets/img/orc.gif" alt="monstre" style="height: 40rem;" >
        </div>
        <div  class="hero" style="height: 40rem;">           
                <img src="assets/img/hero.gif" alt="hero" style="height: 25rem;" id="hero">
                      
        </div>
        <div style="height: 30rem;">
                <img src="assets/img/gun.gif" alt="hero" style="height: 20rem;" id="hero3">
            </div>      

    </div>

    <div class="button1"><button id="attack"> Attaque général !!!</button></div>






    <!-- ## Exercice 13
Créer un fichier **index.php** sur lequel devront être appelés les fichiers **Character.php**, **Hero.php** et **Orc.php**.  
Sur ce fichier, créer 2 objets :
* **hero**, faisant appel à la classe Hero, celui-ci doit avoir 2000 points de vie, 0 points de rage, 600 points d'armure, 250 points de dégâts pour l'arme, les noms de l'arme et de l'armure vous revient,
* **orc**, faisant appel à la classe Orc, celui-ci doit avoir 500 points de vie et 0 points de rage. -->

    <?php
    // $health, $rage, $weapon, $weaponDamage, $shield, $shieldValue

    $hero = new Hero(2000, 0, "épée de flamme", 250, "armure de plaque", 600);
    $orc = new Orc(500, 0);

    ?>


    <!-- ## Exercice 14
Faites attaquer l'Orc **jusqu'à** ce que le Héros tombe à court de points de vie.*(Pour l'instant seul l'orc attaque.)*  
Pour chaque attaque de l'Orc, une phrase contenant toutes les informations de l'assaut doit être affichée (dégâts de l'Orc, dégâts absorbés par le bouclier, dégâts non absorbés, rage actuelle du Héros et santé restante du Héros)
## BONUS (la revanche du Héros)
Faire en sorte que lorsque le Héros arrive à 100 points de rage, déclencher une attaque faisant le nombre de dégâts de l'arme ! -->

    <?php
    

    while ($hero->getHealth() > 0 && $orc->getHealth() > 0) {
        if ($hero->getHealth() > 0 && $orc->getHealth() > 0) {
            $hero->attacked($orc->attack());         
            
            echo "Le monstre inflige " . $orc->attack() . " dégats ! mais " . $hero->getShield() . " bloque " . $hero->getShieldValue() . " dégats, il subit donc " . ($orc->getDamage() - $hero->getShieldValue()) . " point de dégats, il lui reste " . $hero->getHealth() . " point de vie !!! <br>";
            if ($hero->getRage() >= 100) {
                $orc->setHealth($orc->getHealth() - $hero->getWeaponDamage());
                $hero->setRage($hero->getRage() - $hero->getRage());
                echo "Le héro entre en rage et inflige " . $hero->getWeaponDamage() . " dégats !!! <br><br>";
            };
        }
        if ($orc->getHealth() <= 0) {
            echo "Le monstre est vaincu !!! Plus loin, le coup classique, la princesse Mariah Carrey, ils se marièrent, il tua sa femme et hérita de tout le royaume <br> Vous pensiez vraiement qu'il faisait ça pour la gloire ?";
        }
    }


    ?>

<div class="">
        <figure>
            <audio autoplay controls loop src="assets/music/battle1.mp3">
            </audio>
        </figure>
    </div>

    <script src="assets/js/main.js"></script>
</body>

</html>