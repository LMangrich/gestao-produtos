<?php

namespace App\Repositories;

use App\Repositories\IProductRepo;
use App\Models\Product;

class ProductRepo implements IProductRepo
{
    public function create(array $data)
    {
        return Product::create($data);
    }

    public function getAll()
    {
        return Product::all();
    }

    public function update(Product $product, array $data)
    {
        return $product->update($data);
    }

    public function delete(Product $product)
    {
        return $product->delete();
    }
}
