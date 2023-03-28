<x-layout>
    <div>
        {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
        <div class="max-w-4xl mx-auto mt-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Create Category</h1>
                <a href="/categories"
                   class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-700 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">Back</a>
            </div>
                <div class="px-4 sm:px-6 lg:px-8">

                    <form action="/categories" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category
                                name</label>
                            <input type="text"
                                   name="name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Category name"
                                   required="">
                            @error('name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex items-center justify-start space-x-4">
                            <a href="/categories" class="text-gray-900  font-medium  text-sm ">Back</a>
                            <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Save
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</x-layout>
