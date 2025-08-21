<?php

namespace App\Repositories;

use App\Models\Product;

interface IProductRepo
{
    public function create(array $data);
    public function getAll();
    public function update(Product $product, array $data);
    public function delete(Product $product);
}
