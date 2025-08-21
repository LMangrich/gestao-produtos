<?php

namespace App\Services;

use App\Models\Product;
use App\Repositories\IProductRepo;

class ProductService
{
    private IProductRepo $productRepo;

    public function __construct(IProductRepo $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function getAllProducts()
    {
        return $this->productRepo->getAll();
    }

    public function createProduct(array $data)
    {
        return $this->productRepo->create($data);
    }

    public function updateProduct(Product $product, array $data)
    {
        return $this->productRepo->update($product, $data);
    }

    public function deleteProduct(Product $product)
    {
        return $this->productRepo->delete($product);
    }
}
