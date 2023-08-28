<?php

namespace App\Livewire;

use App\Models\preSale;
use Livewire\Component;
use Livewire\WithPagination;

class PreSaleForm extends Component
{
    use WithPagination;

    public string $search = '';

    protected $queryString = ['search'];

    public function getpreSaleProperty()
    {
        if ($this->search) {
            return preSale::where('sale_id', 'like', "%{$this->search}%")->paginate(10);
        } else {
            return preSale::paginate(10);
        }
    }

    public function update()
    {
    }

    public function import()
    {
    }

    public function render()
    {
        return view('livewire.pre-sale-form');
    }
}
