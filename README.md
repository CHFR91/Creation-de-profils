# Creation-de-profils
Permet de créer des identités à la volée

J'ai fait ce script en PHP pour quand on a besoin de créer un faux profil rapidement.

+ sexe + nom + prénom
+ age + date de naissance
+ email
+ adresse + code postal + ville

Le plus long n'est pas de faire le script mais de remplir les tableaux.

Comment l'utiliser ? C'est simple

Faites un require ou un include sur ce fichier PHP
et ensuite appelez :

+ identite("f" ou "m",age minimum, age maximum)
+ adresse()

identité et adresse sont séparés car vous n'avez pas forcément besoin des deux.
