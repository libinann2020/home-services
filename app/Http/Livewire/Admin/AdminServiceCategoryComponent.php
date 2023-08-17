<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceCategoryComponent extends Component
{
    use WithPagination;
    public function deleteServiceCategory($id){
        $category = ServiceCategory::find($id);
        if($category->image){
            unlink('images/categories'.'/'.$category->image);
        }
        $category->delete();
        session()->flash('message', 'Service Category has been deleted successfully');
    }

    public function render()
    {
        $categories = ServiceCategory::paginate(10);
        return view('livewire.admin.admin-service-category-component',compact('categories'))->layout('layouts.base');
    }
}
