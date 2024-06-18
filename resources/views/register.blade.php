<x-layout> 
    <section>
        <form action="/register" method="post">
            @csrf 
            
            <div class="space-y-12">

                <div class="border-b border-gray-900/10 pb-12 mt-16">
                <h2 class="text-base font-semibold leading-7 text-white">Register</h2>

                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium leading-6 text-white">First name</label>
                    <div class="mt-2">
                        <input type="text" name="first-name" id="first-name" class="block px-2 bg-blue-500/10 outline-none w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    </div>

                    <div class="sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium leading-6 text-white">Last name</label>
                    <div class="mt-2">
                        <input type="text" name="last-name" id="last-name" class="block px-2 bg-blue-500/10 outline-none w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    </div>

                    <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium leading-6 text-white">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" class="block px-2 bg-blue-500/10 outline-none w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    </div>

                    <div class="sm:col-span-4">
                    <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" class="block px-2 bg-blue-500/10 outline-none w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    </div>

                </div>
                </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="reset" class="text-sm font-semibold leading-6 text-white">Clear</button>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>

    </section>
</x-layout>