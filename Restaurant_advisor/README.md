/////////////////////////////////////////API avec Laravel/////////////////////////////////

Dans le répertoire " Restaurant_Advisor_API ":

Pour commencer, ouvrez le terminal et installer Composer si pas installé sur MacOs avec les commandes suivantes sans le "#":

      Pour installer Composer:
          # curl -sS https://getcomposer.org/installer | php

      Déplacez composer.phar dans le répertoire suivant /usr/local/bin/:
          # sudo mv composer.phar /usr/local/bin/

      Attribuez les permissions à composer.phar:
          # sudo chmod 755 /usr/local/bin/composer.phar

      Ouvrez .bash_profile pour le modifiez le fichier:
          # nano ~/.bash_profile

      Ajoutez cette ligne si pas présente:
          alias composer="php /usr/local/bin/composer.phar"

      Rechargez les paramètres bash_profile:
          # source ~/.bash_profile

      Vérifier la version Composer:
          # composer -v


Ensuite une fois Composer d'installé, vous pouvez lancer le projet Laravel. Mais avant on va devoir installer
les dépendances et les paquets requis.

      Rendez-vous dans le répertoire Restaurant_Advisor:
          # cd Restaurant_Advisor/

      Installez les dépendances et paquets requis:
          # composer install

      Modifiez fichier .env avec la commande suivante configurez 3 lignes suivantes:
          # nano .env.example

          DB_DATABASE=Restaurant_Advisor
          DB_USERNAME="votre_nom_d'utilisateur"
          DB_PASSWORD="votre_mot_de_passe"

      Renommer .env.example en .env puis enregistrez et quittez:
          # mv .env.example .env

      Générez la clé:
          # php artisan key:generate

      Créez la base de données puis quittez:
          # mysql -u root -p
          MariaDB [(none)]> CREATE DATABASE Restaurant_Advisor;
          MariaDB [(none)]> exit

      Migrez les tables:
          # php artisan migrate

      Générez les seed:
          # php artisan db:seed

      Démarrez le server Laravel:
          # php artisan serve

Maintenant, ouvrez Posteman puis ajoutez un nouvel onglet et accédez aux menu Body.

Pour inscrire un nouvel utilisateur accédez à la route localhost:8000/api/register avec la méthode POST
puis entrez les clé suivantes ainsi attribuez à chaque clé une valeur :

            name
            firstname
            age
            login
            email
            password

Cliquez sur SEND pour soumettre le formulaire, vous aurez une réponse en JSON.

Pour connecter un nouvel utilisateur accédez à la route localhost:8000/api/auth avec la méthode POST
puis entrez les clé suivantes ainsi attribuez à chaque clé les valeurs correspondantes à celles d'un utilisateur
existant:

            login
            password

Cliquez sur SEND pour soumettre le formulaire, vous aurez une réponse en JSON.

Pour lister les utilisateur accédez à la route localhost:8000/api/users avec la méthode GET
Cliquez sur SEND, vous aurez une réponse en JSON.

Pour lister les restaurants accédez à la route localhost:8000/api/restaurants avec la méthode GET
Cliquez sur SEND, vous aurez une réponse en JSON.

Pour créer un nouveau restaurant accédez à la route localhost:8000/api/restaurant avec la méthode POST
puis entrez les clé suivantes ainsi attribuez à chaque clé une valeur :

            name
            description
            grade
            localization
            phone_number
            website
            hours

Cliquez sur SEND pour soumettre le formulaire, vous aurez une réponse en JSON.

Pour modifier un restaurant accédez à la route localhost:8000/api/restaurant/{id} avec la méthode PUT
puis entrez les clé suivantes ainsi attribuez à chaque clé une nouvelle valeur :

            name
            description
            grade
            localization
            phone_number
            website
            hours

Cliquez sur SEND, vous aurez une réponse en JSON.

Pour supprimer un restaurant accédez à la route localhost:8000/api/restaurant/{id} avec la méthode DELETE
Cliquez sur SEND, vous aurez une réponse en JSON.

Pour lister les menus d'un restaurant accédez à la route localhost:8000/api/restaurant/{id}/menus avec la méthode GET
Cliquez sur SEND, vous aurez une réponse en JSON.

Pour créer un menu pour un restaurant accédez à la route localhost:8000/api/restaurant/{id}/menu avec la méthode POST
puis entrez les clé suivantes ainsi attribuez à chaque clé une valeur :

            name
            description
            price
            image
            resto_id

Cliquez sur SEND, vous aurez une réponse en JSON.

Pour modifier un menu pour un restaurant accédez à la route localhost:8000/api/restaurant/{id}/menu avec la méthode PUT
puis entrez les clé suivantes ainsi attribuez à chaque clé une valeur :

            name
            description
            price
            image
            resto_id

Cliquez sur SEND, vous aurez une réponse en JSON.

Pour supprimer un menu pour un restaurant accédez à la route localhost:8000/api/restaurant/{id}/menu/{id} avec la méthode DELETE
Cliquez sur SEND, vous aurez une réponse en JSON.

/////////////////////////////////////////Application android//////////////////////////////

Dans le répertoire " Restaurant_Advisor_Android_APP ":

On retrouve 2 versions de l'application android toutes les 2 développées avec Android Studio en java.

L'une listes les restaurants et l'autre les menus d'un restaurant.
