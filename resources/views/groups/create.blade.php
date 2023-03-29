<x-layout>
    {{--    Create group form--}}
    <div class="flex items-center justify-center">
        <form action="/groups" method="POST"
              class="group bg-gray-900/30 py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/40 hover:smooth-hover">
            @csrf
            @method('POST')
                <div class="mb-6">
                    <label for="name" class="inline-block text-md mb-2">Group Name</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                           value="{{old('name')}}" />

                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="inline-block text-md mb-2">Description</label>
                    <textarea type="text" class="border border-gray-200 rounded p-2 w-full" name="description"
                           value="{{old('author')}}"></textarea>

                    @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="image" class="inline-block text-md mb-2">
                        Book image
                    </label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />

                    @error('image')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <button class="bg-[#FFB84C] text-white rounded py-2 px-4">
                        Create  group
                    </button>

                    <a href="/books" class="text-black ml-4"> Back </a>
                </div>
        </form>
    </div>
</x-layout>
