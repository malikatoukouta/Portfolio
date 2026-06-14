# Portfolio — Abdourmalik Adamou

Portfolio personnel codé **from scratch** en HTML / CSS / JavaScript pur (sans
framework ni étape de build). Développeur web spécialisé WordPress, à la
recherche d'une alternance.

> ℹ️ Cette branche (`portfolio-perso`) contient **uniquement** le portfolio codé.
> Le projet WordPress vit sur la branche `main` du même dépôt.

## ✨ Caractéristiques

- 100 % statique : il suffit d'ouvrir `index.html` dans un navigateur.
- **Responsive** (menu mobile, grilles fluides).
- **Accessible** : HTML sémantique, navigation clavier, lien d'évitement,
  états de focus visibles, libellés ARIA.
- **Thème clair / sombre automatique** (selon les réglages du système).
- Animations d'apparition au défilement, respectant `prefers-reduced-motion`.
- Aucune dépendance externe.

## 📁 Structure

```
.
├── index.html       # Structure et contenu de la page
├── css/
│   └── style.css    # Styles (variables, responsive, thèmes clair/sombre)
├── js/
│   └── main.js      # Menu mobile, retour en haut, apparition au défilement
└── README.md
```

## 🚀 Lancer en local

Aucune installation : ouvre simplement `index.html`.
Pour un rendu plus fidèle (chemins absolus, etc.), tu peux servir le dossier :

```bash
# avec Python (déjà installé sur la plupart des machines)
python3 -m http.server 8000
# puis ouvre http://localhost:8000
```

## 🌍 Mettre en ligne (gratuit) avec GitHub Pages

1. Dépôt GitHub → **Settings** → **Pages**.
2. **Source** : « Deploy from a branch ».
3. **Branch** : `portfolio-perso` / dossier `/ (root)` → **Save**.
4. Le site est publié sous quelques minutes à l'adresse indiquée.

## ✏️ Personnaliser

- **Couleurs / police** : variables en haut de `css/style.css` (bloc `:root`),
  notamment `--color-accent`.
- **Contenu** : tout est dans `index.html` (sections À propos, Compétences,
  Projets, Contact).
- **Lien du portfolio WordPress** : remplace le `href="#"` de la carte
  « Portfolio WordPress » une fois le site en ligne.
