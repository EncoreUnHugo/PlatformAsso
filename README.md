# PlatformAsso – Guide d'installation en local

## Prérequis

Pour faire tourner ce projet en local, vous devez d'abord installer **XAMPP**, un environnement de développement contenant **Apache** et **MySQL**.

Téléchargement : [https://www.apachefriends.org/fr/index.html](https://www.apachefriends.org/fr/index.html)

---

## Étapes d'installation

1. **Lancer les services Apache et MySQL via le panneau de contrôle XAMPP.**

2. **Cloner ce dépôt dans le dossier `htdocs` de XAMPP :**

   ```bash
   git clone <URL_DU_DEPOT> C:\xampp\htdocs\PlatformAsso
   ```

3. **Configurer la base de données :**

   - Ouvrir votre navigateur et aller sur [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Créer une nouvelle base de données (nom suggéré : `platformasso`)
   - Importer les deux fichiers SQL dans cet ordre :
     1. `DATA_create.sql` — pour créer les tables
     2. `DATA_insert.sql` — pour insérer des données de test

4. **Accéder au site web :**

   - Aller sur [http://localhost/PlatformAsso/](http://localhost/PlatformAsso/)
   - Cliquer sur **"WEBSITE"** dans le menu
   - Vous arriverez alors sur la page d’accueil du site

---

## Remarques

- Assurez-vous que le port **80** (Apache) et **3306** (MySQL) ne sont pas utilisés par d'autres services.
- Ce projet ne nécessite aucune configuration supplémentaire une fois placé dans `htdocs`.
