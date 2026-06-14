# Portfolio

Site portfolio développé sous **WordPress** dans le cadre d'un projet de
formation OpenClassrooms. Le site présente un profil, des compétences et des
projets, avec un thème enfant personnalisé basé sur **Twenty Twenty-One**.

> ℹ️ Projet exécuté en **local** (environnement de développement). Voir la
> section [Installation locale](#-installation-locale) pour le lancer.

## 🖼️ Aperçu

![Aperçu du thème Portfolio](wp-content/themes/portfolio/screenshot.png)

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
├── functions.php       # i18n, enqueue styles/scripts, injection du bouton (hook wp_footer)
├── style.css           # Variables, finitions globales, animations, bouton « retour en haut »
├── js/
│   ├── scroll-top.js   # Comportement du bouton « retour en haut »
│   └── reveal.js       # Apparition au défilement (classe « reveal »)
└── screenshot.png
```

## 🧹 Qualité de code

Des outils de formatage et de lint sont configurés à la racine du dépôt
(`.editorconfig`, `.prettierrc.json`, `.stylelintrc.json`) :

```bash
npm install        # installe Prettier et Stylelint
npm run format     # formate le JS/CSS du thème
npm run lint:css   # vérifie le CSS du thème
```

## 🎨 Personnalisation du design

La mise en page principale (sections, cartes projets, en-tête/pied) est construite
avec **Elementor** et s'édite **dans l'admin WordPress**, pas dans les fichiers du
dépôt. Le thème fournit néanmoins une base de style et deux aides réutilisables.

### Couleurs & typographie globales

- **Côté thème** : ajuste les variables en haut de `style.css` (bloc `:root`),
  notamment `--color-accent` (liens, focus, sélection de texte).
- **Côté Elementor** : menu ☰ → **Réglages du site** → **Couleurs globales** et
  **Polices globales** pour définir la charte appliquée à tout le site.

### Animation « apparition au défilement »

Pour faire apparaître un élément en fondu montant quand il entre à l'écran :

1. Dans Elementor, sélectionne le widget ou la section.
2. Onglet **Avancé** → champ **Classes CSS** → saisis `reveal`.
3. Enregistre. Le script `reveal.js` s'occupe de l'animation (et la désactive
   automatiquement si l'utilisateur préfère un mouvement réduit).

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
