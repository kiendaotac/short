<?php

namespace App\Http\Livewire\Backend\Url;

use App\Models\Url;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $urls = Url::query()->latest()->paginate(10);

        return view('livewire.backend.url.index', compact('urls'));
    }

    public function create()
    {
        return redirect()->route('admin.urls.create');
    }

    public function delete(Url $url)
    {
        $url->delete();
    }

    public function edit(Url $url)
    {
        return redirect()->route('admin.urls.edit', $url->id);
    }
}
