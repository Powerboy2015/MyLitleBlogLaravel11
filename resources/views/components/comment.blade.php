    <article class="p-6 text-base bg-white rounded-lg dark:bg-gray-900">
        <footer class="flex justify-between items-center mb-2">
            <div class="flex items-center">
                <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                    {{$commentData->getCommenter->name}}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                        title="February 8th, 2022">{{$commentData->created_at->format('d M Y')}}</time></p>
            </div>
        </footer>
        <p class="text-gray-500 dark:text-gray-400">{{$commentData->commentText}}</p>
        <div class="flex items-center mt-4 space-x-4">
        </div>
    </article>

    