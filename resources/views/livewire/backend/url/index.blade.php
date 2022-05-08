<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button wire:click="create" type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
                Create New
            </button>
    </div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex flex-col py-4">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-6">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mb-4">
                            <table class="w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-6">STT</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-6">Path</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-6">Url</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-6">Images</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-6">Trạng thái</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-6">Thao Tác</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($urls as $index => $url)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                {{ $index + 1 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $url->path }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                <a class="font-medium text-indigo-600 hover:text-indigo-500" target="_blank" href="{{ $url->url }}">Link</a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $url->title }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $url->description }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="mt-1 flex items-center">
                                                <span class="inline-block h-20 w-20 rounded overflow-hidden bg-gray-100">
                                                    <img src="{{ url($url->image) }}" alt="Preview" class="h-20 w-20 object-cover">
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                <span class="uppercase px-2 inline-flex text-xs leading-5 font-semibold rounded-full @if($url->status == 'active') bg-green-100 text-green-800 @else bg-red-100 text-red-800 @endif">
                                                    {{ $url->status }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('redirect.index', $url->path) }}" target="_blank" class="px-2 text-indigo-600 hover:text-indigo-900">View</a>
                                            <a wire:click="edit({{ $url->id }})" href="#" class="px-2 text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <a wire:click="delete({{ $url->id }})" href="#" class="px-2 text-red-600 hover:text-red-900">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4">
                            {{ $urls->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
