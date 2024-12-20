<article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-500">{{$blogData->created_at->format("d M Y")}}</time>
          {{-- <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a> --}}
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
            <a href="/blog/{{$blogData->id}}">
              <span class="absolute inset-0"></span>
              {{-- Title --}} {{ $blogData->postTitle }}
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">{{$blogText}}...</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4">
            <div class="text-sm/6">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                {{$author}}
              </a>
            </p>
          </div>
        </div>
      </article>