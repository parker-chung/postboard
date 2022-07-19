<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a post!') }}
        </h2>
    </x-slot>

    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2>Create Your Post</h2>
        </header>
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    value="{{ old('title') }}" />

            </div>
            <div class="mb-6">
                <label for="content" class="inline-block text-lg mb-2">Content</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="content" rows="10">{{ old('content') }}</textarea>
            </div>
            <div class="mb-6">
                <button class="btn btn-outline-primary rounded py-2 px-4">
                    Create
                </button>

                <a href="{{ url('/') }}" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-app-layout>
