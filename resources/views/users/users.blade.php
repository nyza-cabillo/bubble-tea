<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }} <a href="{{ url('/users/add') }}"><button class="float-right rounded-none bg-sky-500 p-1 hover:bg-sky-700">Add Users</button></a>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            </div>
        </div>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    asbdaasdsfafasfaff
                    
                        <h2 class="text-center">
                            {{ $header }}
                        </h2>

                    <table class="table-auto w-full border-separate border-spacing-2 border">
                        <thead>
                            <tr>
                                <th class="border-separate border-spacing-2 border">Name</th>
                                <th class="border-separate border-spacing-2 border">Email</th>
                                <th class="border-separate border-spacing-2 border">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                        @foreach ($users as $user)
                             <tr>
                                <td class="text-centerborder-separate border-spacing-2 border">{{ $user->name }}</td>
                                <td class="text-center border-separate border-spacing-2 border">{{ $user->email }}</td>
                                <td class="text-center border-separate border-spacing-2 border">
                                    <button class="rounded-none bg-sky-500 p-1 hover:bg-sky-700 outline outline-offset-3 outline-cyan-500 ">Update</button>
                                    <button class="rounded-none bg-red-500 p-1 hover:bg-red-800 outline outline-offset-3 outline-red-500 ">Delete</button>
                                </td>
                            </tr>
                        @endforeach

                           
                        </tbody>

                    </table>
                                            

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
