<?php

namespace App\Http\Livewire\Backend\Url;

use App\Models\Url;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $url;

    public $path;

    public $title;

    public $description;

    public $image;

    public $active = true;

    public function render()
    {
        return view('livewire.backend.url.create');
    }

    public function save()
    {
        $imageUrl = null;
        if ($this->image) {
            $imageUrl = $this->image->storePublicly('images', 'public');
        }
        $imageUrl = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? Str::start($imageUrl, 'storage/') : $imageUrl;

        Url::create([
            'user_id'     => Auth::id(),
            'path'        => $this->path ?: Str::random(8),
            'url'         => $this->url,
            'title'       => $this->title,
            'description' => $this->description,
            'image'       => $imageUrl,
            'status'      => $this->active ? 'active' : 'inactive'
        ]);

        return redirect()->route('admin.urls.index');
    }
}
