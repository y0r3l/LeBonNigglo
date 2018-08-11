# [CTF Inter IUT 2k18]LeBonNigglo

Ce challenge a été réalisé dans le cadre de la deuxième édition du CTF Inter IUT se tenant
à l’ENSIBS de Vannes (Ecole Nationale Supérieur d’Ingénieurs de Bretagne Sud) le samedi 2 juin
2018.
C’est dans le but d’alimenter cet événement en épreuves que j’ai créé le challenge
« LeBonNigglo ».

## Enoncé

Le but de ce challenge est de récupérer le couple adresse mail et mot de passe d’un
utilisateur de ce portail.
Cependant, le challenger ne devra pas utiliser une vulnérabilité d’un des langages de
programmation utilisés.
En effet, il devra tout d’abord analyser le site afin de trouver des informations pertinentes lui
permettant d’obtenir des pistes pour ses futurs recherches.
Puis il devra trouver, sur des sites externes, l’adresse mail et le mot de passe du compte
compromis en utilisant les renseignements d’origine source ouverte (OSINT).

## Categories

* OSINT (Open Source INTelligence)

## Matériel nécessaire pour le résoudre

* Accès à Internet

## Matériel nécessaire pour le rejouer

* Docker

## Mise en place du challenge

1. Depuis ce dossier, effectuez la commande : docker build . -t myphp
2. Puis la commande : docker-compose up -d
3. Enfin, rendez-vous dans votre naviguateur préféré à l'adresse suivante : http://localhost:8080

## Contact

https://twitter.com/y0r3l

