<?php

namespace App\Livewire\Admin\Products;

use App\Enums\ProductStatus;
use App\Livewire\Forms\ProductForm;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

class UpdateProduct extends Component
{
    #[Layout('layouts.admin')]
    public ProductForm $form;
    public $productStatus;

    public function mount(Product $product)
    {
        $this->productStatus = ProductStatus::cases();
        $this->form->setProduct($product);
    }

    public function save()
    {
        $this->form->update();
        return $this->redirect('/admin/products');
    }

    public function render()
    {
        return view('livewire.admin.products.update-product');
    }
}
