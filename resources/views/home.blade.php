<x-app-layout>
    @section('hero')
        <div class="w-full text-center py-32 dark:bg-gray-900">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700 dark:text-gray-200">
                Welcome to <span class="text-indigo-500">&lt;My&gt;</span> <span class="text-gray-900 dark:text-gray-200">
                    Blog</span>
            </h1>
            <p class="text-gray-500 text-lg mt-1 dark:text-gray-300">Best Blog in the universe</p>
            <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block dark:bg-gray-200 dark:text-gray-800 dark:hover:bg-indigo-500 dark:hover:text-gray-200"
                href="http://127.0.0.1:8000/blog">Start
                Reading</a>
        </div>
    @endsection


    <div class="mb-10 w-full dark:bg-primary">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-indigo-500 font-bold">Featured Posts</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featuredPosts as $post)
                        <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
                    @endforeach
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-indigo-500 font-semibold"
                href="http://127.0.0.1:8000/blog">More
                Posts</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-indigo-500 font-bold">Latest Posts</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $post)
                    <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
                @endforeach
            </div>
        </div>
        <a class="mt-10 block text-center text-lg text-indigo-500 font-semibold" href="http://127.0.0.1:8000/blog">More
            Posts</a>
    </div>
</x-app-layout>
