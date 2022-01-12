<div>

    <!-- Code block starts -->
    <div class="my-6 container px-6 mx-auto flex flex-row md:flex-row items-start md:items-center justify-between pb-4 border-b border-gray-300">
        <div class="flex-grow">
            <h4 class="text-2xl font-bold leading-tight text-gray-800 dark:text-gray-100">{{$client->name}}</h4>
            <p class="text-md leading-tight text-gray-800 dark:text-gray-100">
                <i class="fa fa-sign-in"></i> {{$client->user->email}}
            </p>
            <ul aria-label="current Status" class="flex flex-row items-start md:items-center text-gray-600 dark:text-gray-400 text-sm mt-3 gap-x-5">
                <li class="flex items-center mt-4 md:mt-0">
                    <div class="mr-1">
                        <i class="fa fa-sign-in"></i>
                    </div>
                    <span>Status</span> <i class="fa fa-circle text-green-500"></i>

                </li>
                
            </ul>
        </div>
        <div class="flex-initial">
            <button class="mr-3 bg-gray-200 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out rounded hover:bg-gray-300 text-indigo-700 dark:hover:bg-gray-600 dark:text-indigo-600 px-5 py-2 text-sm">Update</button>
            <button class="ransition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">New project</button>
        </div>
    </div>
    <!-- Code block ends -->


    <div class="container flex flex-col mx-auto w-full items-center justify-center">
        <div class="px-4 py-5 sm:px-6 w-full border dark:bg-gray-800 bg-white shadow mb-2 rounded-md">
            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                Projects
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-200">
                All projects
            </p>
        </div>
        <ul class="w-full flex flex-col">
            <li class="border-gray-400 flex flex-row mb-2">
                <div class="shadow border select-none cursor-pointer bg-white dark:bg-gray-800 rounded-md flex flex-1 items-center p-4">
                    <div class="flex-1 pl-1 md:mr-16">
                        <div class="font-medium dark:text-white">
                            Jean Marc
                        </div>
                        <div class="text-gray-600 dark:text-gray-200 text-sm">
                            Developer
                        </div>
                    </div>
                    <div class="text-gray-600 dark:text-gray-200 text-xs">
                        6:00 AM
                    </div>
                    <button class="w-24 text-right flex justify-end">
                        <svg width="12" fill="currentColor" height="12" class="hover:text-gray-800 dark:hover:text-white dark:text-gray-200 text-gray-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                            </path>
                        </svg>
                    </button>
                </div>
            </li>
            <li class="border-gray-400 flex flex-row mb-2">
                <div class="shadow border select-none cursor-pointer bg-white dark:bg-gray-800 rounded-md flex flex-1 items-center p-4">
                    <div class="flex-1 pl-1 md:mr-16">
                        <div class="font-medium dark:text-white">
                            Jean Marc
                        </div>
                        <div class="text-gray-600 dark:text-gray-200 text-sm">
                            Developer
                        </div>
                    </div>
                    <div class="text-gray-600 dark:text-gray-200 text-xs">
                        6:00 AM
                    </div>
                    <button class="w-24 text-right flex justify-end">
                        <svg width="12" fill="currentColor" height="12" class="hover:text-gray-800 dark:hover:text-white dark:text-gray-200 text-gray-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                            </path>
                        </svg>
                    </button>
                </div>
            </li>
            
        </ul>
    </div>


</div>
