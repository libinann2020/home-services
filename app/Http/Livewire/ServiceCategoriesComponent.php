<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use Livewire\Component;

class ServiceCategoriesComponent extends Component
{
    public function render()
    {
        $categories = ServiceCategory::all();
        return view('livewire.service-categories-component',compact('categories'))->layout('layouts.base');
    }
}
