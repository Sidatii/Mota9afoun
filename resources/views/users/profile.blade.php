<x-layout>
    <div class="p-10 max-w-lg mx-auto ">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Update profile info</h2>
        </header>
        @auth

            <form method="POST" action="/profile">
                @csrf
                <div class="mb-6">
                    <label for="name" class="inline-block text-lg mb-2"> Name </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                           value="{{ auth()->user()->name}}"/>

                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Email</label>
                    <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                           value="{{ auth()->user()->email}}"/>

                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="inline-block text-lg mb-2">
                        New Password
                    </label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                           value=""/>

                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password2" class="inline-block text-lg mb-2">
                        Confirm Password
                    </label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full"
                           name="password_confirmation"
                           value=""/>

                    @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4 flex gap-4">
                    <button type="submit" class="bg-[#FFB84C] text-white rounded py-2 px-4 hover:bg-black">
                        Edit Profile
                    </button>
                    <button type="submit" class="bg-[#FFB84C] text-white rounded py-2 px-4 hover:bg-black">
                        Delete Profile
                    </button>
                </div>


            </form>
        @endauth
    </div>
</x-layout>
