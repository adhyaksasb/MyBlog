<div id="posts" class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100 dark:border-gray-700">
        <div class="text-gray-800 dark:text-gray-500 flex gap-2 items-center">
            @if ($this->activeCategory || $search)
                <button class="text-gray-500 text-sm mr-3" wire:click='clearFilters()'>X</button>
            @endif
            @if ($this->activeCategory)
                <x-badge wire:navigate href="{{ route('posts.index', ['category' => $this->activeCategory->slug]) }}"
                    :textColor="$this->activeCategory->text_color" :bgColor="$this->activeCategory->bg_color">
                    {{ $this->activeCategory->title }}
                </x-badge>
            @endif
            @if ($search)
                Searching: <strong>{{ $search }}</strong>
            @endif
        </div>
        <div id="filter-selector" class="flex items-center space-x-4 font-light ">
            <button wire:click="setSort('desc')"
                class="{{ $sort === 'desc' ? 'text-indigo-600 border-b-2 border-indigo-500 dark:text-indigo-500 dark:border-indigo-400' : 'text-gray-500 dark:text-gray-200' }} py-4">Latest</button>
            <button wire:click="setSort('asc')"
                class="{{ $sort === 'asc' ? 'text-indigo-600 border-b-2 border-indigo-500 dark:text-indigo-500 dark:border-indigo-400' : 'text-gray-500 dark:text-gray-200' }} py-4">Oldest</button>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)
            <x-posts.post-item :post="$post" />
        @endforeach
    </div>
    <div class="my-3">
        {{ $this->posts->onEachSide(1)->links('livewire.pagination') }}
    </div>
</div>
