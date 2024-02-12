<?php

const PRENOMM = ['Alain', 'Pierre', 'Jean', 'Jacques', 'Marcel', 'Bastien', 'Laurent', 'Stéphane', 'Albert', 'Lucien', 'Denis', 'Christian', 'Patrick', 'Claude', 'Etienne'];
const PRENOMF = ['Marie', 'Claire', 'Anne', 'Sophie', 'Emilie', 'Lucie', 'Emmanuelle', 'Nathalie', 'Dorothée', 'Chloé', 'Christine', 'Joëlle', 'Murielle'];
const NOM = ['Durand', 'Dupond', 'Lefebvre', 'Martin', 'Lajoie', 'Dupré', 'De la Noue', 'Sesame', 'Rossignol', 'Guerin', 'Gaston', 'Cabanon', 'Lesieur'];
const MOIS = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];

const MAIL = ['gmail.com', 'yahoo.com', 'orange.fr', 'free.fr', 'outlook.com', 'hotmail.com'];

const RUE = ['rue', 'chemin', 'avenue', 'boulevard', 'voie'];
const NOMRUE = ['des fleurs', 'Général de Gaulle', 'Le Maire', 'Mitterand', 'Victor Hugo', 'de la Gare', 'du Maréchal Juin', 'de Paris', 'du marché', 'de la Syphonie', 'Debussy', 'Molière'];
const VILLE = [75=>'Paris', 69=>'Lyon', 76=>'Rouen', 44=>'Nantes', 80=>'Amiens', 33=>'Bordeaux', 59=>'Lille', 13=>'Marseille', 35=>'Rennes', 67=>'Strasbourg', 54=>'Nancy', 66=>'Perpignan'];

function compter($valeur) {
    $total = count($valeur);
    return $total;
}

/*
fonction creation (1/2, tableau)
- 1: tableau normal, 2 tableau associatif
- nom du tableau
*/
function creation ($tf, $valeur) {
    $total = count($valeur);
    $hasard = rand(0, $total -1);

    if ($tf == 1) {
        return $valeur[$hasard];
    } elseif ($tf == 2) {
        for ($i = 0; $i < $total; $i++) {
        }
        $i = 0;
        foreach ($valeur as $x => $y) {
            if ($i == $hasard) {
                echo $x."000 ".$y."\n";
            }
            $i++;
          }
    }
}

/*
fonction identité ("f/m", 20, 40)
- sexe : "f" ou "m"
- age minimum
- age maximum
*/
function identite(string $sexe, int $ageMin, int $ageMax) {
    if ($sexe == "f") {
        $titre = "Mme";
        $prenom = PRENOMF;
    } else {
        $titre = "M.";
        $prenom = PRENOMM;
    }

    $age = rand($ageMin, $ageMax);
    $prenom = creation(1, $prenom);
    $pre1lettre = substr($prenom,0,1);
    $nom = creation(1, NOM);
    $jour = rand(1, 28);
    $mois = creation(1, MOIS);
    $annee = 2024- $age;

    echo $titre ." ". $prenom ." ". $nom ."\n";
    echo "email : ". strtolower($pre1lettre) .".". strtolower($nom) ."@". creation(1, MAIL);
    echo "\n". $age ." ans - ". $jour ."/". $mois ."/". $annee ."\n";
}

/*
fonction adresse ();
*/
function adresse() {
    $numero = rand(1,50);

    echo $numero ." ". creation(1, RUE) ." ". creation(1,NOMRUE) ."\n";
    creation(2, VILLE);
}

identite("m",20,40);
adresse();