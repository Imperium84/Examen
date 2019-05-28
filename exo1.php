<?php

function trouverPetit(array $tableau){
    
    $taille = count($tableau);
    $index = 0;
    $nombreCourant = 0;
    $nombrePetit = 0;
    
    for ($index = 0; $index<$taille; $index++){
        
        $nombreCourant = $tableau[$index];
        
        if ($index == 0){
            $nombrePetit=$nombreCourant;
        }
        
        if ($nombrePetit > $nombreCourant){
            $nombrePetit = $nombreCourant;
        }
    }
    
    return $nombrePetit;
}

$tableau = [3, 5, 17, 58, 2, 56];
echo trouverPetit("EXO 1 : ".$tableau);

