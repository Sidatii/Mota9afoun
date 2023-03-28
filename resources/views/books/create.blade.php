
    <x-layout>
        <div class="p-10 max-w-lg mx-auto mt-8 bg-gray-100 mb-3 rounded-md">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">Add a Book</h2>
            </header>

            <form method="POST" action="/books" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="inline-block text-md mb-2">Book Name</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                           value="{{old('name')}}" />

                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="author" class="inline-block text-md mb-2">Author Name</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="author"
                           placeholder="Example: Joerg Orwell, Tolstoy ..." value="{{old('author')}}" />

                    @error('author')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="published" class="inline-block text-md mb-2">Publishing year</label>
                    <input type="number" class="border border-gray-200 rounded p-2 w-full" name="published"
                           placeholder="Year" value="{{old('published')}}" />

                    @error('published')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="link" class="inline-block text-md mb-2">
                        Book URL
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="link"
                           value="{{old('link')}}" />

                    @error('link')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tags" class="inline-block text-md mb-2">
                        Tags (Comma Separated)
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                           placeholder="Example: Fiction, Science, Society, etc" value="{{old('tags')}}" />

                    @error('tags')
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

                <x-select name="category_id" label="Category" />

                <div class="mb-6">
                    <label for="description" class="inline-block text-md mb-2">
                        Book Description
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                              placeholder="Include a general summary, context, etc">{{old('description')}}</textarea>

                    @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button class="bg-[#FFB84C] text-white rounded py-2 px-4">
                        Add Book
                    </button>

                    <a href="/books" class="text-black ml-4"> Back </a>
                </div>
            </form>
        </div>
    </x-layout>

