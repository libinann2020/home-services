<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Slider;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = ServiceCategory::inRandomOrder()->take(18)->get();
        $fservices = Service::where('featured',1)->inRandomOrder()->take(8)->get();
        $fscategories = ServiceCategory::where('featured',1)->take(8)->get();
        $sid= ServiceCategory::whereIn('slug',['ac','tv','refrigerator','geyser','water-purifier'])->get()->pluck('id');
        $aservices = Service::whereIn('service_category_id',$sid)->inRandomOrder()->take(8)->get();
        $slides = Slider::where('status',1)->get();
        return view('livewire.home-component',compact('categories','fservices','fscategories','sid','aservices','slides'))->layout('layouts.base');
    }
}
