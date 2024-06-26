<x-layout> 
    <section>
        <div class="flex min-h-full flex-col justify-center py-2 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center text-3xl font-bold leading-9 tracking-tight text-white">Sign in to your account</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-5" action="/login" method="POST">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-white">Email address</label>
                        <div class="mt-2">
                        <input id="email" name="email" type="email" placeholder="example@example.com" value="{{old('email')}}" required class="block px-2 bg-blue-500/10 outline-none w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
                        <div class="text-sm">
                        </div>
                        </div>
                        <div class="mt-2">
                        <input id="password" name="password" type="password" required class="block px-2 bg-blue-500/10 outline-none w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="mt-6 flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                    </div>

                </form>

                
                <div class="bg-white/15 mt-10 rounded">
                    @foreach ($errors->all() as $error)
                        <p class="text-red-500 font-bold text-sm px-3 py-2">{{ $error }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-layout>