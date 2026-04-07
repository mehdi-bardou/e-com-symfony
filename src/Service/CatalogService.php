<?php

namespace App\Service;

use App\Entity\Category;
use App\Entity\Product;

class CatalogService
{
    public function getAllCategories(): array
    {
        $electronics = (new Category())
            ->setName('Électronique')
            ->setSlug('electronique');

        $clothing = (new Category())
            ->setName('Vêtements')
            ->setSlug('vetements');

        $accessories = (new Category())
            ->setName('Accessoires')
            ->setSlug('accessoires');

        return [$electronics, $clothing, $accessories];
    }

    public function getAllProducts(): array
    {
        $categories = $this->getAllCategories();

        return [
            [
                'id' => 1,
                'product' => (new Product())
                    ->setName('Laptop Pro')
                    ->setDescription('Ordinateur portable puissant pour le travail et les études.')
                    ->setPrice(12999.99)
                    ->setCategory($categories[0]),
            ],
            [
                'id' => 2,
                'product' => (new Product())
                    ->setName('Casque Audio')
                    ->setDescription('Casque confortable avec un son clair.')
                    ->setPrice(899.99)
                    ->setCategory($categories[0]),
            ],
            [
                'id' => 3,
                'product' => (new Product())
                    ->setName('T-shirt Sport')
                    ->setDescription('T-shirt léger et respirant.')
                    ->setPrice(199.99)
                    ->setCategory($categories[1]),
            ],
            [
                'id' => 4,
                'product' => (new Product())
                    ->setName('Sweat Classique')
                    ->setDescription('Sweat confortable pour un usage quotidien.')
                    ->setPrice(349.99)
                    ->setCategory($categories[1]),
            ],
            [
                'id' => 5,
                'product' => (new Product())
                    ->setName('Sac à dos')
                    ->setDescription('Sac pratique pour transporter vos affaires.')
                    ->setPrice(459.99)
                    ->setCategory($categories[2]),
            ],
        ];
    }

    public function getProductById(int $id): ?array
    {
        foreach ($this->getAllProducts() as $item) {
            if ($item['id'] === $id) {
                return $item;
            }
        }

        return null;
    }

    public function getProductsByCategory(string $slug): array
    {
        $filtered = [];

        foreach ($this->getAllProducts() as $item) {
            if ($item['product']->getCategory()->getSlug() === $slug) {
                $filtered[] = $item;
            }
        }

        return $filtered;
    }

    public function getCategoryBySlug(string $slug): ?Category
    {
        foreach ($this->getAllCategories() as $category) {
            if ($category->getSlug() === $slug) {
                return $category;
            }
        }

        return null;
    }
}