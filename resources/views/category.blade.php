<x-tailwind-layout>
    <div class="h-full" x-data="{ isOpen: null }">
        <!-- component -->

        <body class="antialiased bg-slate-200 text-slate-700 mx-2">
            <div class="max-w-lg mx-auto my-10 bg-white p-8 rounded-xl shadow shadow-slate-300">
                <div class="flex flex-row justify-between items-center">
                    <div>
                        <h1 class="text-3xl font-medium">Products Categories</h1>
                    </div>
                    {{-- <div class="inline-flex space-x-2 items-center">
                        <a href="#"
                            class="p-2 border border-slate-200 rounded-md inline-flex space-x-1 items-center text-indigo-200 hover:text-white bg-indigo-600 hover:bg-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-sm font-medium hidden md:block">Urgent</span>
                        </a>
                        <a href="#"
                            class="p-2 border border-slate-200 rounded-md inline-flex space-x-1 items-center hover:bg-slate-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                            <span class="text-sm hidden md:block">Latest</span>
                        </a>
                    </div> --}}
                </div>
                <p class="text-slate-500">Hello, here are your latest of categories</p>

                <div id="tasks" class="my-5">

                    @foreach ($categories as $category)
                        <div id="task"
                            class="flex justify-between items-center border-b border-slate-200 py-3 px-2 border-l-4  border-l-transparent bg-gradient-to-r from-transparent to-transparent hover:from-slate-100 transition ease-linear duration-150">
                            <div class="inline-flex items-center space-x-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 text-slate-500 hover:text-indigo-600 hover:cursor-pointer">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </div>
                                <div>{{ $category->name }}</div>
                            </div>
                            <div>
                                <button @click="isOpen=  @js($category->id)"  x-show="isOpen !=  @js($category->id)" ><i
                                        class="bx bx-edit text-green-500"></i></button>
                                <button @click="isOpen=  null"  x-show="isOpen ==  @js($category->id)"  style="display: none"><i
                                        class="bx bx-edit text-green-500"></i></button>
                            </div>
                        </div>
                        <form action="{{ route('category.update', ['category' => $category]) }}" method="post"
                            class="mb-6 transition duration-300 delay-100 ease-out"
                            x-show="isOpen ==  @js($category->id)" style="display: none">
                            @csrf
                            @method('PUT')
                            <input value="{{ $category->name }}"
                                class="shadow-sm appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="category" name="category" type="text" placeholder="" autocomplete="off" >
                            <button
                            type="submit"
                                class="bg-blue-500 w-full shadow-sm hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="button">
                                Change
                            </button>
                        </form>
                    @endforeach

                </div>
            </div>

        </body>
    </div>
</x-tailwind-layout>
