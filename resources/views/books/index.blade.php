<x-layout>

    <div id="div1" class="bg-white">
        <div id="div2" class="max-w-2xl mx-auto py-16 px-4 sm:py-16 sm:px-6 lg:max-w-7xl lg:px-8">
            @unless($books->count() == 0)
            <div id="div3" class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">

                @foreach ($books as $book)
                    <x-book-card :book="$book"/>
                @endforeach

                <!-- More products... -->
            </div>
                @else
                    <h3 class="text-xl font-meduim text-gray-900 sm:text-xl text-center">No books found</h3>
                @endunless
        </div>
    </div>

</x-layout>
