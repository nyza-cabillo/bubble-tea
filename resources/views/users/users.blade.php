<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }} <a href="{{ url('/users/add') }}"><button class="float-right rounded-lg bg-green-400 p-1 hover:bg-green-600">Add Users</button></a>

        </h2>
    </x-slot>

    <div class="py-12 bg-green-200">
        @if ( session('status') )      
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                <div class="p-4 mb-4 text-sm tex-green-500 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="fornt-medium">Succes Alert!<br></span> {{ session('status') }}
                </div>
            </div>
        @endif 

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                     
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
                                <td class="text-center border-separate border-spacing-2 border">{{ $user->name }}</td>
                                <td class="text-center border-separate border-spacing-2 border">{{ $user->email }}</td>
                                <td class="text-center border-separate border-spacing-2 border">
                                
                                    <a href="{{ url('/users/update/' . $user->id) }}">
                                        <button class="rounded-lg bg-green-400 p-1 hover:bg-green-600">Update</button>
                                    </a>
                                    <a href="{{ url('/users/editPassword/' . $user->id) }}">
                                        <button class="rounded-lg bg-cyan-600	 p-1 hover:bg-cyan-300	">Edit Password</button>
                                    </a>                                   
                                    <a href="{{ url('/users/delete/' . $user->id) }}">
                                        <button class="rounded-lg bg-red-500 p-1 hover:bg-red-600">Delete</button>
                                    </a>
                                    
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
