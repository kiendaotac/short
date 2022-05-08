<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new URL') }}
        </h2>
    </x-slot>
    <livewire:backend.url.create />
</x-app-layout>