<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Category extends Model
{

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,'product_categories');
    }

    public function allProducts()
    {
        $allProducts = collect([]);

        $mainCategoryProducts = $this->products;

        $allProducts = $allProducts->concat($mainCategoryProducts);

        if($this->children->isNotEmpty()) {

            foreach($this->children as $child) {
                $allProducts = $allProducts->concat($child->products);

            }

        }

        return $allProducts;


    }
}
