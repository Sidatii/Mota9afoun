<x-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative overflow-x-auto mx-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        User
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created_at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Is Admin
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$user->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$user->email}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user->created_at}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user->is_admin}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
