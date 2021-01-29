<?php

//  ## Exercice 9
// Dans un nouveau fichier **Orc.php**, créer la classe **Orc héritant de Character** et ayant pour attribut **damage**.  
// Cet attribut ne doit être accessible **pour personne !**

class Orc extends Character {
private $damage;

// ## Exercice 10
// Créer les **méthodes** permettant d'accéder aux attributs de la classe **Orc** et permettant également de les définir.

public function setDomage($domageValue) {
    $this->damage = $domageValue;
    return $this->damage;
}

public function getDamage() {
    return $this->damage;
}

//    ## Exercice 11
// Créer la **méthode magique construct** de la classe **Orc**.  
// Cette méthode devra permettre le déclenchement de la **méthode construct de la classe mère (Character)**.  
// Elle doit **retourner** une phrase contenant toutes les informations sur l'Orc nouvellement créé. 

public function __construct($health, $rage) {
    // $this->setDomage(rand (600, 800));
    parent::__construct($health, $rage);
    }


// ## Exercice 12
// Créer une **méthode attack** dans la classe **Orc** permettant d'initialiser la valeur de **damage** avec un nombre aléatoire compris entre 600 et 800.

public function attack(){
    $this->damage = rand (600, 800);
    return $this->damage;
}
}