La lettre personnalisée
=======================
Communiquer d'une page à une autre en utilisant l'adresse.

Installation
------------
1. Télécharger le dossier de travail `lettre-depart`.
1. Ouvrir le dossier de travail dans VSCode
1. Démarrer le serveur PHP à l'aide de la commande suivante dans le terminal:
    ```cmd
    php -S localhost:8000
    ```
1. Regarder le fichier `includes/donnees.inc.php`.
1. Regarder les fichiers du dossier `exemples`.
1. Compléter les pages suivantes.

Page `index.php`
----------------
Cette page contient le formulaire permettant à l'usager d'entrer le nom du destinataire.
1. Voir le fichier `exemples/index.html` pour le HTML final.
1. Ajouter le champ de texte en créant une variable dans le prologue de la page et en l'affichant à sa place dans le formulaire.
1. Ajouter le `datalist` en créant une variable dans le prologue de la page et en l'affichant à sa place dans le formulaire. Note: Il faut utiliser une boucle `foreach` et parcourir la variable `$nomsFictifs`.

Page `salutation.php`
---------------------
Cette page contient le formulaire demandant à l'usager comment saluer le destinataire de la lettre.
1. Voir le fichier `exemples/salutation.html` pour le HTML final.
1. Vérifier la présence des données attendues. Si une donnée n'existe pas, on redirige l'usager vers la page `index.php`
1. Ajouter le champ `select` en créant une variable dans le prologue de la page et en l'affichant à sa place dans le formulaire. Note: Il faut utiliser une boucle `foreach` et parcourir la variable `$salutations`.
1. Ajouter le champ `hidden` en créant une variables dan le prologue de la page et en l'affichant à sa place dans le formulaire.

Page `titre.php`
----------------
Cette page contient le formulaire demandant à l'usager le titre du destinataire.
1. Voir le fichier `exemples/titre.html` pour le HTML final.
1. Vérifier la présence des données attendues. Si une donnée n'existe pas, on redirige l'usager vers la page `index.php`
1. Ajouter le champ `select` en créant une variable dans le prologue de la page et en l'affichant à sa place dans le formulaire. Note: Il faut utiliser une boucle `foreach` et parcourir la variable `$titres`.
1. Ajouter les 2 champs `hidden` en créant des variables dans le prologue de la page et en les affichant à leur place dans le formulaire.

Page `paragraphe.php`
---------------------
Cette page contient le formulaire permettant à l'usager de choisir le message de la lettre.
1. Voir le fichier `exemples/paragraphe.html` pour le HTML final.
1. Vérifier la présence des données attendues. Si une donnée n'existe pas, on redirige l'usager vers la page `index.php`
1. Ajouter la série de boutons `radio` en créant une variable dans le prologue de la page et en l'affichant à sa place dans le formulaire. Note: Il faut utiliser une boucle `foreach` et parcourir la variable `$paragraphes`.
1. Ajouter les 3 champs `hidden` en créant des variables dans le prologue de la page et en les affichant à leur place dans le formulaire.

Page `lettre.php`
-----------------
Cette page présente la lettre finale.
1. Voir le fichier `exemples/lettre.html` pour le HTML final.
1. Vérifier la présence des données attendues. Si une donnée n'existe pas, on redirige l'usager vers la page `index.php`.
1. Récupérer les données reçues. Note: Certaines données doivent être transformées en entier à l'aide de la fonction `intval`.
1. Composer le HTML de la lettre finale en utilisant avec les données récupérées.

Page `compil.php`
-----------------
Cette page présente un formulaire qui contient tous les champs des autres page. Cette page affiche également la lettre finale.
1. Voir le fichier `exemples/compil.html` pour le HTML final.
1. Vérifier la présence des données attendues. Si une donnée n'existe pas, on lui attribue une valeur par défaut.
1. Créer les éléments de formulaire en leur donnant la valeur correspondant à celle récupérée.
    1. le `input` pour la donnee `nom`
    1. le `datalist` pour la donnee `nom`
    1. le `select` pour la donnée `salutation`
    1. le `select` pour la donnée `titre`
    1. la série de boutons `radio` pour la donnée `paragraphe`
1. Composer la lettre finale.
1. Faire afficher chaque élément dans son emplacement respectif.