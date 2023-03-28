<x-layout>

    <div id="div1" class="bg-white">
        <div id="div2" class="max-w-2xl mx-auto py-16 px-4 sm:py-16 sm:px-6 lg:max-w-7xl lg:px-8 flex flex-col gap-4">
            <div class="flex justify-center">
                @if(isset(auth()->user()->is_admin))
                    @if(auth()->user()->is_admin === 1)
                        {{--                Add a new book--}}
                        <a href="/book/create"
                           class="px-4 py-2 text-sm font-medium text-white transition-colors duration-150 bg-blue-700 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">Add
                            a new book</a>
                    @endif
                @endif
            </div>
            <x-_search/>
            @unless($books->count() == 0)
                <div id="div3"
                     class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">

                    @foreach ($books as $book)
                        <x-book-card :book="$book"/>
                    @endforeach

                    <!-- More products... -->
                </div>
            @else
                <h3 class="text-xl font-meduim text-gray-900 sm:text-xl text-center">No books found</h3>
            @endunless
        </div>
        <div class="mt-8 p-4 flex justify-center ">
            {{ $books->links() }}
        </div>
    </div>

</x-layout>
