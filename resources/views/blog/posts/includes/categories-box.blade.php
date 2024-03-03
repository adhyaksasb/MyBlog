<div>
    <h3 class="text-lg font-semibold text-gray-900 mb-3 dark:text-gray-400">Recommended Topics</h3>
    <div class="topics flex flex-wrap justify-start gap-2">
        {{-- request()->fullUrlWithQuery([]) to maintain search query when clicking categories --}}
        @foreach ($categories as $category)
            <x-badge wire:navigate href="{{ route('posts.index', ['category' => $category->slug]) }}" :textColor="$category->text_color"
                :bgColor="$category->bg_color">
                {{ $category->title }}
            </x-badge>
        @endforeach
    </div>
</div>
