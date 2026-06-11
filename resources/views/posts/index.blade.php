<x-layout title="Blog">

    @forelse ($posts as $post)
        <article class="bg-white border border-stone-200 rounded-lg p-8 mb-6 hover:border-red-600 transition-colors duration-200">
            <p class="font-mono text-xs text-stone-500 mb-2">{{ $post->created_at->format('M d, Y') }}</p>
            <h2 class="text-2xl font-bold mb-2">
                <a href="{{ $post->url }}" class="text-stone-900 no-underline hover:text-red-700">{{ $post->title }}</a>
            </h2>
            <p class="text-stone-500">{{ Str::limit(strip_tags($post->body), 160) }}</p>
            <a href="{{ $post->url }}" class="inline-block mt-4 font-mono text-xs uppercase tracking-wider text-red-700 hover:text-red-900">Read article &rarr;</a>
        </article>
    @empty
        <p class="text-stone-500">No posts yet.</p>
    @endforelse

    <div class="flex gap-2 mt-12 font-mono text-sm">
        {{ $posts->links() }}
    </div>

</x-layout>
