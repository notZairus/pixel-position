<x-layout> 
    <section class=" w-full mb-10">
        <h1 class="text-3xl font-bold text-center mt-10">Post A Job</h1>
        <form action="/create" method="post" class="space-y-4">
            @csrf 
        
            <div class="sm:col-span-4 w-full flex flex-col items-center">
                <div class="mt-2 w-2/3">
                    <label for="title" class="block text-sm font-medium leading-6 text-white">Title</label>
                    <input id="title" name="title" type="text" placeholder="Software Engineer" class="block px-2 bg-blue-500/10 outline-none w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4 w-full flex flex-col items-center">
                <div class="mt-2 w-2/3">
                    <label for="salary" class="block text-sm font-medium leading-6 text-white">Salary</label>
                    <input id="salary" name="salary" type="text" placeholder="Php 56,000" class="block px-2 bg-blue-500/10 outline-none w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>   

            <div class="sm:col-span-4 w-full flex flex-col items-center">
                <div class="mt-2 w-2/3">
                    <label for="schedule" class="block text-sm font-medium leading-6 text-white">Schedule</label>
                    <select name="schedule" id="schedule" class="block px-2 bg-blue-500/10 outline-none w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option value="Full Time" class="bg-black">Full Time</option>
                        <option value="Part Time" class="bg-black">Part Time</option>
                    </select>
                </div>
            </div>   

            <div class="sm:col-span-4 w-full flex flex-col items-center">
                <div class="mt-2 w-2/3">
                    <label for="url" class="block text-sm font-medium leading-6 text-white">Url</label>
                    <input id="url" name="url" type="text" placeholder="https://laracasts.com/work" class="block px-2 bg-blue-500/10 outline-none w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>   

            <div class="sm:col-span-4 w-full flex flex-col items-center">
                <div class="mt-2 w-2/3">
                    <strong class="block text-sm font-medium leading-6 text-white">
                        Featured? 
                    </strong>
                </div>
                <label
                for="featured"
                class="flex cursor-pointer items-start gap-4 rounded-lg border border-gray-200 p-4  w-2/3"
                >
                    <div class="flex items-center">
                        &#8203;
                        <input type="checkbox" class="size-4 rounded border-gray-300" id="featured" name="featured" />
                    </div>

                    <div>
                        <p class="mt-1 text-pretty text-sm">
                            Checking this will result on additional charges.
                        </p>
                    </div>
                </label>
            </div>

            <div class="sm:col-span-4 w-full flex flex-col items-center">
                <div class="mt-2 w-2/3">
                    <label for="tags" class="block text-sm font-medium leading-6 text-white">Tags (comma and space separated)</label>
                    <input id="tags" name="tags" type="text" placeholder="Example: Programming, Managing, Editing" class="block px-2 bg-blue-500/10 outline-none w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>   

            <div class="sm:col-span-4 w-full flex flex-col items-center">
                <div class="mt-8 w-2/3 flex justify-end space-x-5">
                    <button type="reset" class="text-sm font-semibold leading-6 text-white">Clear</button>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </div>   

            

    </section>
</x-layout>