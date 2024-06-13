## Add your files

- [ ] [Create](https://docs.gitlab.com/ee/user/project/repository/web_editor.html#create-a-file) or [upload](https://docs.gitlab.com/ee/user/project/repository/web_editor.html#upload-a-file) files
- [ ] [Add files using the command line](https://docs.gitlab.com/ee/gitlab-basics/add-file.html#add-a-file-using-the-command-line) or push an existing Git repository with the following command:

```
cd existing_repo
git remote add origin https://git.unistra.fr/armagan/prog-web2.git
git branch -M main
git push -uf origin main
```


# Nom du Projet
Projet web-2


## Aperçu du Projet
Le projet se compose d'une page d'acceuil, d'une page de contact et d'une page d'a propos.La page principale a les projets fait dans mon GIT. La page de contact vérifie et enregistre tout le contenu du formulaire envoyé par les utilisateurs. Les données seront stockées dans db.sqlite, avec une opération asynchrone sur le bouton d'envoi de contenu. La page A Propos offre un aperçu convivial et engageant de moi et de mes intérêts, tout en présentant mes compétences et mon parcours éducatif de manière concise. 


## Fonctionnalités
Page d"Accueil" : Affiche les informations principales sur les projets.

Page "Contact" : Permet aux utilisateurs de soumettre des messages de contact.

Page "À Propos" : Fournit des détails sur la personne effectue ce projet WEB.

Validation des formulaires : Les données soumises via les formulaires sont validées côté client et côté serveur pour assurer leur intégrité.

Gestion des messages : Les messages soumis via le formulaire de contact sont enregistrés dans une base de données.


## Description des fonctionnalités
Chaque page inclut les fonctionnalites suivants;

- Le code PHP commence par error_reporting(E_ALL); et ini_set('display_errors', 1);, ce qui indique que les erreurs seront affichées sur la page en cas de problème avec le code.

- fichier header.php: a le header ayant un petit icon"BUNNY" et le navbar HOME,CONTACT,ABOUT,LANGUAGE une fonction de traduction.

- fichier footer.php: a le footer qui consiste des informations de contact tels que:Mon e-mail, Copyright et le numero portable.


La page d'accueil donne aux visiteurs un aperçu clair et rapide des projets de mon GIT>> A voir en cliquant sur le lien direct vers mon dépôt git. Chaque projet est présenté avec une brève description et avec une photo, permettant ainsi aux utilisateurs de naviguer facilement et de découvrir rapidement mes différents travaux.

La page de Contact inclus le fichier form.php ce qui signifie qu'il contient un formulaire permettant aux utilisateurs de saisir leur nom, leur adresse e-mail, leur numéro de téléphone et un message pour pouvoir contacter, just en dessous du formulaire, il existe un bouton "Show all forms" déclenche l'affichage de tous les formulaires (ou peut-être des entrées de formulaires précédemment soumis).


## Demarrer le serveur on Terminal
php -S localhost:8000


## Fork
[![Fork](https://img.shields.io/github/forks/armagan/prog-web2.svg?style=social&label=Fork)](https://git.unistra.fr/armagan/prog-web2/-/forks/new)


## Contribution
1- Forkez le dépôt.

2- Créez une nouvelle branche (git checkout -b feature/amélioration).

3- Effectuez vos modifications et committez-les (git commit -am 'Ajouter une nouvelle fonctionnalité').

4- Poussez vers la branche (git push origin feature/amélioration).

5- Créez une nouvelle Pull Request.

Toutes les contributions pour améliorer ce projet sont les bienvenues ! <3


## Auteur
ARMAGAN Omer Ali - [@armgan](https://git.unistra.fr/armagan)


## Licence
Ce projet est sous licence UNISTRA.


## Project status
Ce projet est termine...


