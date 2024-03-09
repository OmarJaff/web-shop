<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class Product extends Component
{
   public $productId;
   public $variant;

   public $rules = [
        'variant' => ['required', 'exists: App\Models\ProductVariants, id']
   ];
    #[computed]
    public function product()
    {
        return \App\Models\Product::findOrFail($this->productId);
    }

    public function mount ()
    {
        $this->variant = $this->product->variants()->value('id');
    }

    public function addToCart ()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.product');
    }
}
