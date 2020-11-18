# Pour l'installation du projet

1. Cloner le projet sur votre machine : `git clone  https://github.com/formateur-pompey/SymfonyVisio.git`
1. Modifier le `.env.default` en `.env` avec vos paramètre BDD
1. Installez les dépendances : `composer update`
1. Créez votre BDD : `php bin/console d:d:c`
1. Jouez les migrations : `php bin/console d:m:m`
1. Jouez les fixtures : `php bin/console d:f:l --no-interaction`
1. Lancez le server symfony : `symfony serve`

# Exercice relation

### Première étape

 - Créer une entity catégorie qui est en relation avec l'entité recette
 - L'entité catégorie peux être gérer par l'administrateur (édit, create, delete)
 - Ajouter le champ catégorie dans le formulaire de la recette 

### Deuxième étape

 - Créer une relation entre un Utilisateur et la recette
 - Enregistrer l'utilisateur qui a proposer la recette 
 - Afficher un lien **Proposer une recette** dans la barre de menu uniquement si un utilisateur est connecter
 - Afficher le nom de l'utilisateur qui a proposer la recette dans la description 
