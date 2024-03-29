<?php

namespace SujanSht\AdminMaster\Http\Livewire\Admin\Media;

use Log;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class SpartanImageUpload extends Component
{
    public $imageName;
    public $divClass="row";
    public $class;
    public $divId;
    public $multiple=false;
    public $height='200px';
    public $imageCount=10;
    public $model;



    public function render()
    {
        return view('admin-master::livewire.admin.media.spartan-image-upload');
    }

    public function removeImage(Media $media, $collection = null)
    {
        $media->delete();
        $this->model = null;
    }
}
