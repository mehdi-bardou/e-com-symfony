<?php

namespace App\Controller;

use App\Service\CatalogService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StoreController extends AbstractController
{
    /**
     * Page d'accueil
     */
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * Page des produits (liste)
     */
    #[Route('/products', name: 'app_products')]
    public function products(CatalogService $catalogService): Response
    {
        return $this->render('shop/products.html.twig', [
            'products' => $catalogService->getAllProducts(),
        ]);
    }

    /**
     * Page de détail d'un produit
     */
    #[Route('/products/{id}', name: 'app_product_details', requirements: ['id' => '\d+'])]
    public function productDetails(int $id, CatalogService $catalogService): Response
    {
        $item = $catalogService->getProductById($id);

        if (!$item) {
            throw $this->createNotFoundException('Produit introuvable.');
        }

        return $this->render('shop/product_details.html.twig', [
            'id' => $item['id'],
            'product' => $item['product'],
        ]);
    }

    /**
     * Page des catégories
     */
    #[Route('/categories', name: 'app_categories')]
    public function categories(CatalogService $catalogService): Response
    {
        return $this->render('shop/browse_categories.html.twig', [
            'categories' => $catalogService->getAllCategories(),
        ]);
    }

    /**
     * Page des produits par catégorie
     */
    #[Route('/categories/{slug}', name: 'app_products_by_category')]
    public function productsByCategory(string $slug, CatalogService $catalogService): Response
    {
        $category = $catalogService->getCategoryBySlug($slug);

        if (!$category) {
            throw $this->createNotFoundException('Catégorie introuvable.');
        }

        return $this->render('shop/products_by_category.html.twig', [
            'category' => $category,
            'products' => $catalogService->getProductsByCategory($slug),
        ]);
    }

    /**
     * Page du panier
     */
    #[Route('/cart', name: 'app_cart')]
    public function cart(): Response
    {
        return $this->render('cart/cart.html.twig');
    }

    /**
     * Page de connexion / inscription
     */
    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('account/login.html.twig');
    }

    /**
     * Page du profil utilisateur
     */
    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {
        return $this->render('account/profile.html.twig');
    }
}