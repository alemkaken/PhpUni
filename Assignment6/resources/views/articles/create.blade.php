<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('articles.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-4">
                        <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                        <input id="title" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" name="title" value="{{ old('title') }}" required autofocus />
                        @error('title')
                            <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="content" class="block font-medium text-sm text-gray-700">Content</label>
                        <textarea id="content" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" name="content" rows="6" required>{{ old('content') }}</textarea>
                        @error('content')
                            <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="text-sm text-gray-600 hover:text-gray-900 rounded-md" href="{{ route('articles.index') }}">Cancel</a>
                        <button type="submit" class="ml-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            Create Article
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
