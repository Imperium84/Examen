<?php

/* Classe permettant de g�rer les tableaux
 * Contient un constructeur
 * Contient un getter
 * Contient un setter
 * Contient une m�thode renvoyant le nombre le plus petit pr�sent dans le tableau
 */

class ArrayManager 
{
    private $tableau;

    public function __construct(array $tab) 
    {
        $this->tableau = $tab;
    }

    public function getTableau()
    {
        return $this->tableau;
    }

    public function setTableau(array $tab)
    {
        $this->tableau = $tab;
    }

    //M�thode permettant de trouver le plus petit nombre du tableau
    public function trouverPetit() 
    {
        $taille = count($this->tableau);
        $index = 0;
        $nombreCourant = 0;
        $nombrePetit = 0;

        for ($index = 0; $index < $taille; $index++) {

            $nombreCourant = $this->tableau[$index];

            if ($index == 0) {
                $nombrePetit = $nombreCourant;
            }

            if ($nombrePetit > $nombreCourant) {
                $nombrePetit = $nombreCourant;
            }
        }

        return $nombrePetit;
    }

}
