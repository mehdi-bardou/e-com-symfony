# E-Commerce - Projet Symfony (Étape 1)

Projet e-commerce réalisé avec **Symfony 6.4** dans le cadre du module Symfony / EHEI.

## Structure du projet

```
symfony-ecommerce/
├── config/
│   ├── packages/
│   │   ├── framework.yaml
│   │   └── twig.yaml
│   ├── routes.yaml
│   └── services.yaml
├── public/
│   ├── images/          ← images (airbod.png, item.png, etc.)
│   └── index.php
├── src/
│   ├── Controller/
│   │   └── StoreController.php   ← Toutes les routes
│   └── Kernel.php
├── templates/
│   ├── base.html.twig            ← Layout commun (navbar + footer)
│   ├── home/
│   │   └── index.html.twig       ← Page d'accueil
│   ├── shop/
│   │   ├── products.html.twig          ← Liste des produits
│   │   ├── product_details.html.twig   ← Détail d'un produit
│   │   ├── browse_categories.html.twig ← Page des catégories
│   │   └── products_by_category.html.twig ← Produits par catégorie
│   ├── cart/
│   │   └── cart.html.twig        ← Panier
│   └── account/
│       ├── login.html.twig       ← Connexion / Inscription
│       └── profile.html.twig     ← Profil utilisateur
├── .env
└── composer.json
```

## Routes disponibles

| URL | Nom de route | Template | Description |
|-----|-------------|---------|-------------|
| `/` | `app_home` | `home/index.html.twig` | Page d'accueil |
| `/products` | `app_products` | `shop/products.html.twig` | Liste des produits |
| `/products/{id}` | `app_product_details` | `shop/product_details.html.twig` | Détail produit |
| `/categories` | `app_categories` | `shop/browse_categories.html.twig` | Catégories |
| `/categories/{slug}` | `app_products_by_category` | `shop/products_by_category.html.twig` | Produits par catégorie |
| `/cart` | `app_cart` | `cart/cart.html.twig` | Panier |
| `/login` | `app_login` | `account/login.html.twig` | Connexion / Inscription |
| `/profile` | `app_profile` | `account/profile.html.twig` | Profil utilisateur |

## Installation et lancement

### Prérequis
- PHP >= 8.1
- Composer
- Symfony CLI (recommandé)

### Installation

```bash
# Installer les dépendances
composer install

# Lancer le serveur de développement
symfony serve

# OU avec PHP directement
php -S localhost:8000 -t public/
```

Le projet est accessible sur : **http://localhost:8000**

## Technologies utilisées

- **Symfony 6.4** — Framework PHP
- **Twig 3** — Moteur de templates
- **Bootstrap 5.3** — Framework CSS (via CDN)

## Notes importantes (Étape 1)

Conformément au cahier des charges :
- ✅ Pages intégrées dans Symfony via Twig
- ✅ Pas de base de données
- ✅ Pas de JavaScript front-end additionnel
- ✅ Héritage Twig : toutes les pages étendent `base.html.twig`
- ✅ Navigation avec `path()` Symfony pour les liens internes
