@props(['book'])

<div id="div4">
    <div id="div5-1" class="relative">
        <div class="relative w-full h-96 rounded-lg overflow-hidden">
        <img src="{{$book->image ? asset('/storage/'.$book->image) : asset('/images/the.png')}}" alt="" class="w-full h-full object-center object-fit">
        </div>
        <div class="relative mt-4">
        <h3 class="text-sm font-medium text-gray-900"></h3>
        <h2 class="mt-1  text-black text-center uppercase font-bold">{{$book->name}}</h2>
        <h4 class="mt-1 text-md text-center">Author: <strong>{{$book->author}}</strong></h4>
        <h4 class="mt-1 text-sm text-gray-500 text-center">Year: {{$book->published}}</h4>
        <x-book-tag :tags="$book->tags"/>

        </div>
        <div class="absolute top-0 inset-x-0 h-96 rounded-lg p-4 flex items-end justify-end overflow-hidden">
        <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
{{--        <p class="relative text-lg font-semibold text-white">{{$book->category}}</p>--}}
        </div>
    </div>
    <div id="div5-2" class="mt-6">
        <a href="/books/{{$book->id}}" class="relative flex bg-gray-100 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:bg-gray-200">Book details<span class="sr-only">, Zip Tote Basket</span></a>
    </div>
</div>
