<x-layout>
    <div class="bg-white">

        <div class="mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <button type="submit"
                    class="flex-none rounded-md bg-indigo-500 py-1.5 px-3.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                <a href="/books">Go back</a></button>
            <!-- Product -->
            <div class="lg:grid lg:grid-rows-1 lg:grid-cols-7 lg:gap-x-8 lg:gap-y-10 xl:gap-x-16 mt-3">
                <!-- Product image -->
                <div class="lg:row-end-1 lg:col-span-4">
                    <div class="aspect-w-4 aspect-h-3 rounded-lg bg-gray-100 overflow-hidden">
                        <img src="{{$books->image ? asset('/storage/'.$books->image) : asset('/images/the.png')}}"
                             alt="Sample of 30 icons with friendly and fun details in outline, filled, and brand color styles."
                             class="object-center object-contain">
                    </div>
                </div>


                <!-- Product details -->
                <div
                    class="max-w-2xl mx-auto mt-14 sm:mt-16 lg:max-w-none lg:mt-0 lg:row-end-2 lg:row-span-2 lg:col-span-3">
                    <div class="flex flex-col-reverse">
                        <div class="mt-4">
                            <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">{{$books->name}}</h1>

                            <h2 id="information-heading" class="sr-only">Product information</h2>
                            <p class="text-sm text-gray-500 mt-2">Added {{$books->created_at}}</p>
                        </div>

                        <div>
                            <h3 class="sr-only">Reviews</h3>
                            <div class="flex items-center">
                                <!--
                                  Heroicon name: solid/star

                                  Active: "text-yellow-400", Default: "text-gray-300"
                                -->
                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="text-gray-300 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                        </div>
                    </div>

                    <p class="text-gray-500 my-6">{{$books->description}}</p>
                    <x-book-tag :tags="$books->tags"/>

                    @if(auth()->user()->is_admin)
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
                            <a href="/books/{{$books->id}}/edit">
                                <button type="button"
                                        class="w-full bg-green-700 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-igreen-700">
                                    Edit
                                </button>
                            </a>
                            <form action="/books/{{$books->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="w-full bg-red-700 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-bg-red-700">
                                    Delete
                                </button>
                            </form>
                        </div>

                    @else
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
                            <button type="button"
                                    class="w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">
                                Read
                            </button>
                            <a href="#">
                                <button type="button"
                                        class="w-full bg-indigo-50 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-indigo-700 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">
                                    Add to favourites
                                </button>
                            </a>
                        </div>
                    @endif
                </div>

                <div class="w-full max-w-2xl mx-auto mt-16 lg:max-w-none lg:mt-0 lg:col-span-4">
                    <div>
                        <div class="border-b border-gray-200">
                            <div class="-mb-px flex space-x-8" aria-orientation="horizontal" role="tablist">
                                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-700 hover:text-gray-800 hover:border-gray-300" -->
                                <button id="tab-reviews"
                                        class="border-transparent text-gray-700 hover:text-gray-800 hover:border-gray-300 whitespace-nowrap py-6 border-b-2 font-medium text-sm"
                                        aria-controls="tab-panel-reviews" role="tab" type="button">Readers Reviews
                                </button>
                            </div>
                        </div>

                        <!-- 'Customer Reviews' panel, show/hide based on tab state -->
                        <div id="tab-panel-reviews" class="-mb-10" aria-labelledby="tab-reviews" role="tabpanel"
                             tabindex="0">
                            <h3 class="sr-only">Customer Reviews</h3>

                            <div class="flex text-sm text-gray-500 space-x-4">
                                <div class="flex-none py-10">
                                    <img
                                        src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                                        alt="" class="w-10 h-10 bg-gray-100 rounded-full">
                                </div>
                                <div class="py-10">
                                    <h3 class="font-medium text-gray-900">Emily Selman</h3>
                                    <p>
                                        <time datetime="2021-07-16">July 16, 2021</time>
                                    </p>

                                    <div class="flex items-center mt-4">
                                        <!--
                                          Heroicon name: solid/star

                                          Active: "text-yellow-400", Default: "text-gray-300"
                                        -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>

                                        <!-- Heroicon name: solid/star -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>

                                        <!-- Heroicon name: solid/star -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>

                                        <!-- Heroicon name: solid/star -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>

                                        <!-- Heroicon name: solid/star -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                    <p class="sr-only">5 out of 5 stars</p>

                                    <div class="mt-4 prose prose-sm max-w-none text-gray-500">
                                        <p>This icon pack is just what I need for my latest project. There's an icon for
                                            just about anything I could ever need. Love the playful look!</p>
                                    </div>
                                </div>
                            </div>


                            <!-- More reviews... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
