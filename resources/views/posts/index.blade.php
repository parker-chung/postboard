<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('posts.create') }}" class="mb-3 btn btn-outline-primary ">Post</a>
                    <div class="mx-3">
                        @unless($posts->isEmpty())
                            @foreach ($posts as $post)
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <h2 class="card-title inline">{{ $post->title }}</h2>
                                        <span> by {{ $post->user->name }}</span>
                                        <p class="card-text mt-1">{{ $post->content }}</p>
                                        @if (auth()->id() === $post->user_id)
                                            <div class="container" align="right">
                                                <a href="{{ route('posts.edit', $post->id) }}" class="mr-2">
                                                    <button class='btn btn-outline-warning'>Edit</button>
                                                </a>
                                                <form method="POST" action="{{ route('posts.destroy', $post->id) }}"
                                                    class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-center my-3">No Posts</p>
                        @endunless

                    </div>
                    <div class="mt-3 p-4">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
