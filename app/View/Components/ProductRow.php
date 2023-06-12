<?php

namespace App\View\Components;

use App\Models\ProductList;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductRow extends Component
{
    public $product;
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-row', [
            'products' => ProductList::paginate(10),
        ]);
    }
}
