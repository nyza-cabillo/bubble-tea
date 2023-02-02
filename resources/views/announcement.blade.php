<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section> 
        <div class="flex bg-green-200">
            <div class="w-2/12 flex items-center">
                <div class="w-full text-right">
                    <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="sliderContainer" class="w-10/12 overflow-hidden">
            <div> 
                <img src="assets/img/logo.svg" width="200px" height="200px">
                <a href="{{ url('/users') }}"><button class="float-right rounded-lg bg-green-400 p-1 hover:bg-green-600">Go Back</button></a>
            </div>
                <ul id="slider" class="flex w-full">
                    <li class="w-96 p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="assets/img/report/rep1.jpg" alt=""/>
                            
                        </div>
                    </li>  

                    <li class="w-96 p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="assets/img/report/rep2.jpg" alt=""/>
                           
                        </div>
                    </li>  

                    <li class="w-96 p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="assets/img/report/rep3.jpg" alt=""/>
                            
                        </div>
                    </li>  

                    <li class="w-96 p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="assets/img/report/rep4.png" alt=""/>
                          
                        </div>
                    </li>  

                    <li class="w-96 p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="assets/img/report/rep5.jpg" alt=""/>
                           
                        </div>
                    </li>  

                    <li class="w-96 p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="assets/img/report/pro2.jpg" alt=""/>
                            
                        </div>
                    </li>  

                    <li class="w-96 p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="assets/img/report/pro3.jpg" alt=""/>
                           
                        </div>
                    </li>  

                    <li class="w-96 p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="assets/img/report/pro4.jpg" alt=""/>
                           
                        </div>
                    </li>  

                    <li class="w-96 p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="assets/img/report/pro5.jpg" alt=""/>
                       
                        </div>
                    </li>                  
                    
                </ul>
            </div>
            <div class="w-2/12 flex items-center">
                <div class="w-full">
                    <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg ml-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
            <!--tableee-->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-10">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-center font-bold">
                            {{ $header }}
                        </h2>
                                    

                    <table class="table-auto w-full border-separate border-spacing-2 border p-6">
                        <thead>
                            <tr>
                                <th class="border-separate border-spacing-2 border">Discussion</th>
                                <th class="border-separate border-spacing-2 border">Description</th>
                                <th class="border-separate border-spacing-2 border">Date</th>
                                <th class="border-separate border-spacing-2 border">Action</th>
                            </tr>
                        </thead>

                        <tbody> <!--Top Announcement-->
                                <tr>
                                    <td class="border-separate border-spacing-2 border">WE ARE HIRING!
                                            </td>
                                    
                                    <td class="text-center border-separate border-spacing-2 border">
                                            POSITION: CASHIER<br>

                                                Kindly send your updated resume to:<br>
                                                chaahbyjuyensph@gmail.com<br>

                                                or you can send it directly to our page<br> Cha'ah by: Juyens
                                    </td>
                                    <td class="text-center border-separate border-spacing-2 border">
                                            POSTED: January 27, 2023
                                    </td>
                                    <td class="text-center border-separate border-spacing-2 border">
                                        <a href="{{ url('/make-an') }}">
                                        <button class="rounded-lg bg-green-400 p-1 hover:bg-green-600 border-separate border-spacing-2 border">Add Announcement</button> <br>
                                        </a>
                                        <a href="{{ url('/announcement/delete/') }}">
                                            <button class="rounded-lg bg-cyan-600 p-1 hover:bg-cyan-300	border-separate border-spacing-2 border">Delete Announcement</button>
                                        </a>                                   
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-separate border-spacing-2 border">WE ARE HIRING!</td>
                                    
                                    <td class="text-center border-separate border-spacing-2 border">
                                         POSITION: Office & Marketing Staff<br>

                                                Kindly send your updated resume to:<br>
                                                chaahbyjuyensph@gmail.com<br>

                                                or you can send it directly to our page<br> Cha'ah by: Juyens
                                    </td>
                                    <td class="text-center border-separate border-spacing-2 border">
                                            POSTED: November 26, 2022
                                    </td>
                                    <td class="text-center border-separate border-spacing-2 border">
                                        <a href="{{ url('/make-an') }}">
                                        <button class="rounded-lg bg-green-400 p-1 hover:bg-green-600 border-separate border-spacing-2 border">Add Announcement</button> <br>
                                        </a>
                                        <a href="{{ url('/announcement/delete/') }}">
                                            <button class="rounded-lg bg-cyan-600 p-1 hover:bg-cyan-300	border-separate border-spacing-2 border">Delete Announcement</button>
                                        </a>                                   
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-separate border-spacing-2 border">WE ARE HIRING!</td>
                                    
                                    <td class="text-center border-separate border-spacing-2 border">
                                            POSITION: General Accounting Staff<br>

                                                Kindly send your updated resume to:<br>
                                                chaahbyjuyensph@gmail.com<br>

                                                or you can send it directly to our page<br> Cha'ah by: Juyens
                                    </td>
                                    <td class="text-center border-separate border-spacing-2 border">
                                            POSTED: August 11, 2022
                                    </td>
                                    <td class="text-center border-separate border-spacing-2 border">
                                        <a href="{{ url('/make-an') }}">
                                        <button class="rounded-lg bg-green-400 p-1 hover:bg-green-600 border-separate border-spacing-2 border">Add Announcement</button> <br>
                                        </a>
                                        <a href="{{ url('/announcement/delete/') }}">
                                            <button class="rounded-lg bg-cyan-600 p-1 hover:bg-cyan-300	border-separate border-spacing-2 border">Delete Announcement</button>
                                        </a>                                   
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-separate border-spacing-2 border">RAFFLE DRAW!
                                            </td>
                                    
                                    <td class="text-center border-separate border-spacing-2 border">
                                            CHRISTMAS RAFFLE DRAW 🎁<br>

                                            There will be 5 winners of<br> LECHON BELLY and CAKE for Christmas!
                                    </td>
                                    <td class="text-center border-separate border-spacing-2 border">
                                            POSTED: December 19, 2022
                                    </td>
                                    <td class="text-center border-separate border-spacing-2 border">
                                        <a href="{{ url('/make-an') }}">
                                        <button class="rounded-lg bg-green-400 p-1 hover:bg-green-600 border-separate border-spacing-2 border">Add Announcement</button> <br>
                                        </a>
                                        <a href="{{ url('/announcement/delete/') }}">
                                            <button class="rounded-lg bg-cyan-600 p-1 hover:bg-cyan-300	border-separate border-spacing-2 border">Delete Announcement</button>
                                        </a>                                   
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-separate border-spacing-2 border">BUY 1 TAKE 1!</td>
                                    
                                    <td class="text-center border-separate border-spacing-2 border">
                                         This is our happy hour <br>offer every day from 2PM until 5PM
                                    </td>
                                    <td class="text-center border-separate border-spacing-2 border">
                                            POSTED: December 16, 2022
                                    </td>
                                    <td class="text-center border-separate border-spacing-2 border">
                                        <a href="{{ url('/make-an') }}">
                                        <button class="rounded-lg bg-green-400 p-1 hover:bg-green-600 border-separate border-spacing-2 border">Add Announcement</button> <br>
                                        </a>
                                        <a href="{{ url('/announcement/delete/') }}">
                                            <button class="rounded-lg bg-cyan-600 p-1 hover:bg-cyan-300	border-separate border-spacing-2 border">Delete Announcement</button>
                                        </a>                                   
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-separate border-spacing-2 border">50% DISCOUNT!</td>
                                    
                                    <td class="text-center border-separate border-spacing-2 border">
                                           Opening Promo<br>
                                           Get Yours Now!
                                    </td>
                                    <td class="text-center border-separate border-spacing-2 border">
                                            POSTED: December 07, 2022
                                    </td>
                                    <td class="text-center border-separate border-spacing-2 border">
                                        <a href="{{ url('/make-an') }}">
                                        <button class="rounded-lg bg-green-400 p-1 hover:bg-green-600 border-separate border-spacing-2 border">Add Announcement</button> <br>
                                        </a>
                                        <a href="{{ url('/announcement/delete/') }}">
                                            <button class="rounded-lg bg-cyan-600 p-1 hover:bg-cyan-300	border-separate border-spacing-2 border">Delete Announcement</button>
                                        </a>                                   
                                       
                                    </td>
                                </tr>
                                
                        </tbody>

                    </table>
                </div>
            </div>
           

        </div>
    </div>

    
    <script src="assets/js/report.js"></script>
</body>
</html>