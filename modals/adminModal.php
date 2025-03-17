<!-- <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" /> -->
<link rel="stylesheet" href="../output.css">

<!-- This is an example component -->
<div id="modalContainer" class="w-full h-full fixed top-0 left-0 z-10 flex justify-center items-center bg-[var(--color-transparent)]">
 
    <!-- Modal toggle -->
    <!-- <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="authentication-modal">
    Toggle login modal
    </button> 

     Main modal -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700 w-[50%] max-md:w-[70%] max-sm:w-[90%]">
                <div class="flex justify-end p-2">
                    <button type="button" id="close1" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#" method="post">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Register a new Admin</h3>
                    <div>
                        <label for="username" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Your Username</label>
                        <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Lii" required="">
                    </div>
                    <div>
                        <label for="name" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Your Name</label>
                        <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Name" required="">
                    </div>
                    <div>
                        <label for="role" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Role</label>
                      <select name="role" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        <option selected disabled>--- Select Role ---</option>
                        <option value="Admin">Admin</option>
                        <option value="Author">Author</option>
                      </select>
                      </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                    <button name="send" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register Admin</button>
                </form>
            </div>
        </div>

<!-- <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script> -->