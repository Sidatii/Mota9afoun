@extends('layout')

@section('content')


<h1>
    {{$title}}
</h1>
<div id="div1" class="bg-white">
    <div id="div2" class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <div id="div3" class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($books as $book)

            <div id="div4">
            <div id="div5-1" class="relative">
                <div class="relative w-full h-80 rounded-lg overflow-hidden">
                <img src="{{$book->image}}" alt="" class="w-full h-full object-center object-cover">
                </div>
                <div class="relative mt-4">
                <h3 class="text-sm font-medium text-gray-900"></h3>
                <h2 class="mt-1 text-sm text-black text-center font-medium uppercase">{{$book->name}}</h2>
                <h4 class="mt-1 text-sm text-gray-500 text-center">Author: {{$book->author}}</h4>
                <h4 class="mt-1 text-sm text-gray-500 text-center">Year: {{$book->published}}</h4>
                <div class="mt-1 text-sm text-gray-500 text-center container">tags: {{$book->tags}}</div>

                </div>
                <div class="absolute top-0 inset-x-0 h-80 rounded-lg p-4 flex items-end justify-end overflow-hidden">
                <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                <p class="relative text-lg font-semibold text-white">Category</p>
                </div>
            </div>
            <div id="div5-2" class="mt-6">
                <a href="#" class="relative flex bg-gray-100 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:bg-gray-200">Book details<span class="sr-only">, Zip Tote Basket</span></a>
            </div>
            </div>
            @endforeach
            <!-- More products... -->
        </div>
    </div>
</div>
<h3>
    <a href="/books/{{$book['id']}}">{{$book['name']}}</a>
</h3>
<h4>
    {{$book['description']}}    
</h4>    

@endsection