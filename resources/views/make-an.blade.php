<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Make Announcement') }} <a href="{{ url('/announcement') }}"><button class="float-right rounded-lg bg-green-400 p-1 hover:bg-green-600">Back</button></a>
        </h2>
    </x-slot>

    <div class="p-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                
                   <form class="bg-white p-6 rounded-lg">
                        <h2 class="text-lg font-medium mb-4">Make an Announcement</h2>
                        <div class="mb-4">
                            <label class="block font-medium mb-2" for="title">
                            Title
                            </label>
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="title" type="text" placeholder="Enter a title">
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium mb-2" for="message">
                            Message
                            </label>
                            <textarea class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500 h-32" id="message" placeholder="Enter your message"></textarea>
                        </div>
                      
                        <button class="bg-green-500 hover:bg-green-300 text-white font-medium py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Submit
                        </button>
                       
                    </form>

                    

                </div>
            </div>
        </div>
    
    </div>    
    
</x-app-layout>
