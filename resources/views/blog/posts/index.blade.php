<x-app-layout>
    <div class="w-full grid grid-cols-4 gap-10">
        <div class="md:col-span-3 col-span-4">
            <livewire:post-list />
        </div>
        <div id="side-bar"
            class="col-span-4 md:col-span-1 px-3 md:px-6  space-y-10 py-6 pt-10 md:border-l border-gray-100 dark:border-gray-700 h-screen sticky top-0">
            <livewire:search-box />
            @include('blog.posts.includes.categories-box')
        </div>
    </div>
</x-app-layout>
