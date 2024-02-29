# MyAgda - Plateforme de Gestion de Contacts

MyAgda est une plateforme de gestion de contacts conçue pour faciliter la gestion des contacts personnels et professionnels. Elle offre des fonctionnalités avancées pour créer, visualiser, modifier et supprimer des contacts, ainsi que des fonctionnalités d'authentification pour sécuriser l'accès aux données.

## Fonctionnalités Principales

- **Gestion des Contacts:** MyAgda permet aux utilisateurs de créer, afficher, modifier et supprimer des contacts enregistrés sur la plateforme.
- **Authentification Utilisateur:** Les utilisateurs peuvent s'inscrire et se connecter à leur compte pour accéder à leurs contacts en toute sécurité.
- **Enregistrement des Contacts:** Chaque contact peut contenir des informations telles que le nom, le prénom, l'adresse e-mail, le numéro de téléphone, etc.
- **Fonctionnalités Administrateur:** Les administrateurs ont accès à des fonctionnalités avancées telles que la gestion des utilisateurs et la visualisation de tous les contacts enregistrés sur la plateforme.

## Technologies Utilisées

- **PHP 8.1:** Langage de programmation utilisé pour le développement de l'application.
- **Symfony 6.3:** Framework PHP utilisé pour créer une application Web robuste et évolutive.
- **Doctrine ORM:** Bibliothèque PHP utilisée pour la gestion des entités et des relations avec la base de données.
- **PHPUnit:** Framework de test unitaire utilisé pour tester le code PHP.
- **Twig:** Moteur de template utilisé pour générer des vues HTML.
- **Symfony Flex:** Outil de gestion des dépendances pour installer et configurer les composants Symfony.
- **Symfony Maker Bundle:** Bundle Symfony utilisé pour générer automatiquement du code pour les contrôleurs, les entités, les formulaires, etc.

## Installation

Pour exécuter MyAgda localement, suivez les instructions ci-dessous :

1. Clonez le dépôt du projet sur votre machine locale.
2. Assurez-vous que PHP 8.1 est installé sur votre système.
3. Exécutez `composer install` pour installer les dépendances du projet.
4. Configurez le fichier `.env` avec les paramètres de votre base de données et autres configurations nécessaires.
5. Créez la base de données en utilisant la commande `php bin/console doctrine:database:create`.
6. Exécutez les migrations pour créer les tables de base de données avec la commande `php bin/console doctrine:migrations:migrate`.
7. Lancez le serveur Symfony en utilisant la commande `symfony server:start` et accédez-y dans votre navigateur web.

## Contributions

Les contributions à ce projet sont les bienvenues ! Si vous trouvez des problèmes ou avez des suggestions d'amélioration, n'hésitez pas à ouvrir une issue ou à soumettre une pull request sur le dépôt GitHub du projet.

## Licence

Ce projet est sous licence propriétaire. Toute utilisation commerciale ou redistribution sans autorisation est strictement interdite.
