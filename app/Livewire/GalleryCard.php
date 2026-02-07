<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;

class GalleryCard extends Component
{
       public $Images = [];

    public function mount()
    {
        $this->loadHeroImages();
    }

    private function loadHeroImages()
    {
        // Get active galleries with images
        $this->Images = Image::latest()->take(5)->get();
    }
    public function render()
    {
        return view('livewire.gallery-card');
    }
}
