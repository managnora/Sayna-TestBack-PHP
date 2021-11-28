# Sayna-TestBack-PHP

 ###cloner le projet https://github.com/managnora/Sayna-TestBack-PHP.git
 `cd Sayna-TestBack-PHP`
 
 #Installation des dependances et de base de données
 ###`composer install`
 ###`php bin/console doctrine:database:create`
 ###`php bin/console doctrine:migrations:migrate`
 
 #Les differents routes api
 
 ##`/`  method GET Affichage de la page index
 ##`/register` method POST inscription d'un utilisateur 
 ### Pour la validation de mot de passe doit comporter au moins 8 caractères, contenir au moins une chiffre, une lettre majuscule et minuscule
 ##`/login` method POST authentification d'un utilisateur
 ##`/user/{token}` method GET récupération de l'utilisateur
 ##`/users/{token}` method GET récupération des utilisateurs
 ##`/users/{token}` method PUT modification de l'utilisateur
 ##`/users/{token}` method DELETE  déconnexions de l'utilisateur