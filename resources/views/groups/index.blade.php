<x-layout>




        <!-- component -->
        <div class=" min-h-screen flex items-center justify-center">
            <div class=" flex-1 flex flex-col space-y-5 lg:space-y-0 lg:flex-row lg:space-x-10 max-w-6xl sm:p-6 sm:my-2 sm:mx-4 sm:rounded-2xl">
                <div class="flex-1 px-2 sm:px-0">
                    <div class="mb-10 sm:mb-0 mt-10 grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        <div class="group bg-gray-900/30 py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/40 hover:smooth-hover">
                            <a class="bg-gray-900/70 text-white/50 group-hover:text-white group-hover:smooth-hover flex w-20 h-20 rounded-full items-center justify-center" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </a>
                            <a class="text-white/50 group-hover:text-white group-hover:smooth-hover text-center" href="#">Create group</a>
                        </div>
                        @foreach($groups as $group)
                        <div class="relative group bg-yellow-300 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                            <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1547592180-85f173990554?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="cuisine" />
                            <h4 class="text-white text-2xl font-bold capitalize text-center">{{$group->name}}</h4>
                            <p class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse text-white">{{$group->created_at}}</p>
                            <form action="/groups/{{$group->id}}/join" method="POST" class="bg-yellow-400 p-4 text-white group-hover:text-white group-hover:smooth-hover flex w-10 h-10 rounded-full items-center justify-center mt-10">
                                @csrf
                                @method('POST')
                                <button type="submit">
                                JOIN
                                </button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


</x-layout>
