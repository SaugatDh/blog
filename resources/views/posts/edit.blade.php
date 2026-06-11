<x-layout title="Edit Post">

    <h1 class="text-2xl font-bold mb-8">Edit Post</h1>

    <form action="{{ route('admin.posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label for="title" class="block font-mono text-xs uppercase tracking-wider text-stone-500 mb-2">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}"
                   class="w-full px-4 py-3 border border-stone-200 rounded bg-white focus:outline-none focus:border-red-700" required>
            @error('title')
                <p class="text-red-700 font-mono text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="body" class="block font-mono text-xs uppercase tracking-wider text-stone-500 mb-2">Content</label>
            <textarea id="body" name="body" rows="15"
                      class="w-full px-4 py-3 border border-stone-200 rounded bg-white resize-y leading-relaxed focus:outline-none focus:border-red-700" required>{{ old('body', $post->body) }}</textarea>
            @error('body')
                <p class="text-red-700 font-mono text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" name="published" value="1" {{ old('published', $post->published) ? 'checked' : '' }}>
                <span class="text-sm">Published</span>
            </label>
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-red-700 hover:bg-red-800 text-white px-6 py-2 rounded font-mono text-xs uppercase tracking-wider transition-colors">Update Post</button>
            <a href="{{ route('admin.posts.index') }}" class="border border-red-700 text-red-700 hover:bg-red-700 hover:text-white px-6 py-2 rounded font-mono text-xs uppercase tracking-wider no-underline transition-colors">Cancel</a>
        </div>
    </form>

</x-layout>
