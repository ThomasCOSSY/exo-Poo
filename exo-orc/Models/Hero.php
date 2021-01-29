<?php

// ## Exercice 4
// Dans un nouveau fichier **Hero.php**, créer la classe **Hero héritant de Character** et ayant pour attributs **weapon**, **weaponDamage**, **shield** et **shieldValue**.  
// * L'attribut **weapon** permettra de définir le nom de l'arme équipée,  
// * **weaponDamage** indiquera les dégâts basiques de l'arme,  
// * **shield** définira le nom du bouclier équipée,
// * **shieldValue** idiquera la nombre de dégâts que le bouclier encaisse à la place du héros.  

// Les attributs ne doivent être accessibles **pour personne !**


class Hero extends Character
{
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;



    // ## Exercice 5
    // Créer les **méthodes** permettant d'accéder aux attributs de la classe **Hero** et permettant également de les définir.

    public function setWeapon($weaponValue) {
        $this->weapon = $weaponValue;
        return $this->weapon;
    }

    public function getWeapon() {
        return $this->weapon;
    }

    public function setWeaponDamage($weaponDamageValue) {
        $this->weaponDamage = $weaponDamageValue;
        return $this->weaponDamage;
    }

    public function getWeaponDamage() {
        return $this->weaponDamage;
    }

    public function setShield($shieldValue) {
        $this->shield = $shieldValue;
        return $this->shield;
    }

    public function getShield() {
        return $this->shield;
    }

    public function setShieldValue($shieldValueValue) {
        $this->shieldValue = $shieldValueValue;
        return $this->shieldValue;
    }

    public function getShieldValue() {
        return $this->shieldValue;
    }
    

    // ## Exercice 6
    // Créer la **méthode magique construct** de la classe **Hero**.  
    // Cette méthode devra permettre le déclenchement de la **méthode construct de la classe mère (Character)** et devra également permettre de défnir les valeurs de **weapon**, **weaponDamage**, **shield** et **shieldValue**.  
    // **Pour finir**, cette méthode doit **retourner** une phrase contenant toutes les informations sur le Héros nouvellement créé.

    
        public function __construct($health, $rage, $weapon, $weaponDamage, $shield, $shieldValue) {
            parent::__construct($health, $rage);
            $this->setHealth($health);
            $this->setRage($rage);
            $this->setWeapon($weapon);
            $this->setWeaponDamage($weaponDamage);
            $this->setShield($shield);
            $this->setShieldValue($shieldValue);
        
        echo "Equipé de son " . $this->getWeapon() . " d'un puissance de " . $this->getWeaponDamage() . " dégats, et de son " . $this->getShield() . " le protègeant de " . $this->getShieldValue() . " dégats, notre héro part à l'avanture et rencontre un horrible monstre qui l'attaque !!! <br><br>";
    }


// ## Exercice 7
// Créer une **méthode attacked** dans la classe **Hero** permettant au Héros de prendre des dégâts **en considérant la valeur du bouclier**.
// ## Exercice 8
// Pour chaque coup reçu, il faudra faire gagner de la rage à notre Héros.  
// Créer une méthode permettant d'augmenter la valeur de **rage** de 30.


public function attacked($damage){
    $brutDamage = $damage - $this->getShieldValue();
    parent::setHealth(parent::getHealth() - $brutDamage) ; 
    parent::setRage(parent::getRage() +30);
}

}
