<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Article Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-3xl font-bold mb-4">{{ $article->title }}</h1>
                <div class="text-sm text-gray-500 mb-6 pb-6 border-b">
                    By {{ $article->user->name }} &bull; {{ $article->created_at->format('M d, Y') }}
                </div>
                
                <div class="prose max-w-none text-gray-800 mb-8 whitespace-pre-line">
                    {{ $article->content }}
                </div>

                <div class="flex items-center space-x-4">
                    <a href="{{ route('articles.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">Back to List</a>
                    
                    @can('update', $article)
                    <a href="{{ route('articles.edit', $article) }}" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
                    @endcan

                    @can('delete', $article)
                    <form action="{{ route('articles.destroy', $article) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this article?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                    </form>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
