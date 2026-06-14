# Portfolio

Site portfolio développé sous **WordPress** dans le cadre d'un projet de
formation OpenClassrooms. Le site présente un profil, des compétences et des
projets, avec un thème enfant personnalisé basé sur **Twenty Twenty-One**.

## 🧱 Stack technique

- **WordPress** (core)
- **Thème enfant** `portfolio` (parent : Twenty Twenty-One)
- **PHP / HTML / CSS / JavaScript**
- **Base de données** MySQL / MariaDB
- Extensions principales :
  - [Elementor](https://elementor.com/) (constructeur de pages)
  - Essential Addons for Elementor (Lite)
  - Header Footer Elementor
  - Custom Post Type UI
  - WPForms (Lite) — formulaire de contact

## 📁 Structure

Le thème personnalisé se trouve dans :

```
wp-content/themes/portfolio/
├── functions.php       # Chargement du style et du script du thème enfant
├── style.css           # Styles personnalisés (dont le bouton « retour en haut »)
├── footer.php          # Pied de page + bouton de retour en haut
├── js/
│   └── scroll-top.js   # Comportement du bouton « retour en haut »
└── screenshot.png
```

## 🚀 Installation locale

1. Cloner le dépôt dans le répertoire web de votre serveur local
   (WAMP/MAMP/LAMP, Local, etc.).
2. Créer une base de données MySQL (par défaut nommée `portfolio`).
3. Copier `wp-config-sample.php` vers `wp-config.php` et renseigner :
   - le nom de la base, l'utilisateur et le mot de passe ;
   - des clés et salts uniques générés via
     <https://api.wordpress.org/secret-key/1.1/salt/>.
4. Lancer l'installation WordPress en visitant le site dans le navigateur.
5. Activer le thème **Portfolio** depuis `Apparence > Thèmes`.

> ⚠️ Le fichier `wp-config.php` contient des données sensibles (identifiants de
> base de données et clés secrètes). Il est volontairement exclu du suivi git
> via `.gitignore` et ne doit **jamais** être committé.

## 📝 Licence

Code distribué sous licence **GNU GPL v3 ou ultérieure**.
