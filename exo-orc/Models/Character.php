<?php

// ## Exercice 1
// Créer un fichier **Character.php**, dans ce fichier créer une classe **Character** ayant pour attributs **health** et **rage**.  
// Les attributs ne doivent être accessibles **pour personne !**

class Character {

    private $health;
    private $rage;


    //     ## Exercice 2
// Créer les **méthodes** permettant d'accéder aux attributs de la classe **Character** et permettant également de les définir.

    public function setHealth($healthValue) {
        $this->health = $healthValue;
        return $this->health;
    }

    public function getHealth() {
        return $this->health;
    }

    /**
     * Set the value of rage
     *
     * @return  self
     */ 
    public function setRage($rageValue)
    {
        $this->rage = $rageValue;

        return $this;
    }

    /**
     * Get the value of rage
     */ 
    public function getRage()
    {
        return $this->rage;
    }

    // ## Exercice 3
// Créer la **méthode magique construct** de la classe **Character**.  
// Celle-ci doit permettre la création d'un nouveau personnage et doit donc définir les valeurs de **health** et de **rage**.

    public function __construct($health, $rage) {
        $this->setHealth($health);
        $this->setRage($rage);
    }


}
