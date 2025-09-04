<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    use WithPagination;

    #[Layout('layouts.admin')]
    public $perPage = 7;
    public $search = '';
    public $sortByColumn = 'created_at';
    public $sortDirection = 'DESC';

    public function query()
    {
        return Product::query()
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortByColumn, $this->sortDirection);
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
        }
    }

    public function setSortFunctionality($columnName)
    {
        if ($this->sortByColumn == $columnName) {
            $this->sortDirection = ($this->sortDirection == 'ASC') ? 'DESC' : 'ASC';
            return;
        }
        $this->sortByColumn = $columnName;
        $this->sortDirection = 'ASC';
    }

    public function render()
    {
        $products = $this->query()->paginate($this->perPage);

        return view('livewire.admin.products.product-table', [
            'products' => $products,
        ]);
    }
}
