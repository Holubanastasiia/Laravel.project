<?php

namespace App\Livewire\Admin\Products;

use App\Enums\ProductStatus;
use App\Models\Product;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Livewire\Forms\ProductForm;

class CreateProduct extends Component
{
    #[Layout('layouts.admin')]
    public $name;
    public $price;
    public $description;
    public $status;
    public $productStatus;

    public function mount() {
        $this->productStatus = ProductStatus::cases();
    }
    public function render()
    {
        return view('livewire.admin.products.create-product');
    }
    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'status' => 'required|boolean',
        ]);

        Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Product created successfully!');
        return $this->redirect('/admin/products');

    }
}
