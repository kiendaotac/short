<?php

namespace App\Http\Livewire\Backend\Url;

use App\Models\Url;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $url;

    public $path;

    public $title;

    public $description;

    public $image;

    public $imageUrl;

    public $active;

    public $urlModel;

    public function render()
    {
        return view('livewire.backend.url.edit');
    }

    public function mount(Url $url)
    {
        $this->urlModel    = $url;
        $this->url         = $url->url;
        $this->path        = $url->path;
        $this->title       = $url->title;
        $this->description = $url->description;
        $this->imageUrl    = $url->image;
        $this->active      = $url->status == 'active';
    }

    public function update()
    {
        if ($this->image) {
            $imageUrl = $this->image->storePublicly('images', 'public');
            $this->imageUrl = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? Str::start($imageUrl, 'storage/') : $imageUrl;
        }

        $this->urlModel->update([
            'path'        => $this->path ?: Str::random(8),
            'url'         => $this->url,
            'title'       => $this->title,
            'description' => $this->description,
            'image'       => $this->imageUrl,
            'status'      => $this->active ? 'active' : 'inactive'
        ]);

        return redirect()->route('admin.urls.index');
    }
}
