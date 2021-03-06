<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden sm:rounded-lg flex justify-center">
            <div class="flex flex-col py-4">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-6">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mb-4">
                            <div class="mt-10 sm:mt-0">
                                <div class="md:grid md:grid-cols-4 md:gap-6">
                                    <div class="mt-5 md:mt-0 md:col-span-4">
                                        <div class="shadow overflow-hidden sm:rounded-md">
                                            <div class="px-4 py-5 bg-white sm:p-6">
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                                                        <input wire:model.debounce.1s="url" type="text" id="url" autocomplete="off" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="path" class="block text-sm font-medium text-gray-700">Path</label>
                                                        <input wire:model.debounce.1s="path" type="text" id="path" autocomplete="off" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-6">
                                                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                                        <input wire:model.debounce.1s="title" type="text" id="title" autocomplete="off" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-6">
                                                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                                        <div class="mt-1">
                                                            <textarea wire:model.debounce.1s="description" id="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Description"></textarea>
                                                        </div>
                                                        <p class="mt-2 text-sm text-gray-500"></p>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-6">
                                                        <label class="block text-sm font-medium text-gray-700">H??nh ???nh</label>
                                                        <div class="mt-1 flex items-center">
                                                            <span class="inline-block h-20 w-20 rounded overflow-hidden bg-gray-100">
                                                                @if($image)
                                                                    <img src="{{ $image->temporaryUrl() }}" alt="Preview" class="h-20 w-20 object-cover">
                                                                @else
                                                                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                                    </svg>
                                                                @endif
                                                            </span>
                                                            <label for="image" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 cursor-pointer">
                                                                <span>Ch???n file</span>
                                                                <input wire:model="image" id="image" type="file" accept="image/*" class="sr-only">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-6">
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input wire:model="active" id="active" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="active" class="font-medium text-gray-700">K??ch ho???t</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                                <button wire:click="save" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
