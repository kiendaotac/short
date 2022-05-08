<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit URL') }}
        </h2>
    </x-slot>
    <livewire:backend.url.edit :url="$url"/>
</x-app-layout>