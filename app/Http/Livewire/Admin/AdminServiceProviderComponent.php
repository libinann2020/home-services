<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceProvider;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceProviderComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $sproviders = ServiceProvider::paginate(10);
        return view('livewire.admin.admin-service-provider-component',compact('sproviders'))->layout('layouts.base');
    }
}
