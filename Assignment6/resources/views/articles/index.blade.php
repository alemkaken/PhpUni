<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 flex justify-between items-center">
                    <span>Manage Articles</span>
                    @can('create', App\Models\Article::class)
                    <a href="{{ route('articles.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Create New</a>
                    @endcan
                </div>
            </div>

            @if(session('success'))
            <div class="mb-4 text-green-600 bg-green-100 p-4 rounded-md">
                {{ session('success') }}
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($articles as $article)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold mb-2">{{ $article->title }}</h3>
                    <p class="text-sm text-gray-500 mb-4">By {{ $article->user->name }}</p>
                    <p class="text-gray-700 truncate mb-4">{{ $article->content }}</p>

                    <div class="flex space-x-2">
                        <a href="{{ route('articles.show', $article) }}" class="text-blue-600 hover:underline">View</a>
                        
                        @can('update', $article)
                        <a href="{{ route('articles.edit', $article) }}" class="text-yellow-600 hover:underline">Edit</a>
                        @endcan

                        @can('delete', $article)
                        <form action="{{ route('articles.destroy', $article) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                        @endcan
                    </div>
                </div>
                @empty
                <div class="col-span-1 md:col-span-3 bg-white p-6 rounded-lg text-center text-gray-500 shadow-sm">
                    No articles found.
                </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
