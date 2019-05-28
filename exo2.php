<?php

class ArrayManager
{
    private $tableau;
    
    function __construct(array $tab)
    {
        $this->tableau = $tab;
    }
    
    function getTableau()
    {
        return $this->tableau;
    }
    
    function setTableau(array $tab)
    {
        $this->tableau = $tab;
    }
    
    //M�thode permettant de trouver le plus petit nombre du tableau
    function trouverPetit()
    {
        $taille = count($this->tableau);
        $index = 0;
        $nombreCourant = 0;
        $nombrePetit = 0;

        for ($index = 0; $index<$taille; $index++){

            $nombreCourant = $this->tableau[$index];

            if ($index == 0){
                $nombrePetit=$nombreCourant;
            }

            if ($nombrePetit > $nombreCourant){
                $nombrePetit = $nombreCourant;
            }
        }
    
        return $nombrePetit;
    }
    
}