<x-tailwind-layout>
    <div>
        <div class="py-12">
            <div class="mx-auto px-3 md:px-6 lg:px-16">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="bg-red-100 w-full p-3 space-y-1 rounded border border-red-400 text-xs text-red-400">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="lg:w-[90%] w-full mx-auto mb-3 flex items-center justify-between">
                    <h1 class="font-semibold text-2xl">New Product</h1>
                </div>
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg border py-6 border-gray-200 h-auto lg:w-[90%] w-full mx-auto">
                    <form class="w-full lg:px-8 px-4 py-3 my-form" action="{{ route('products.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-2">
                            <div class="col-span-1 flex flex-col mt-1">
                                <label for="name" class=" block text-sm font-medium leading-6 text-gray-900">
                                    Product Name</label>
                                <input id="name"
                                    class="block w-full  px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                                    type="text" name="name" :value="old('name')" autofocus />
                            </div>
                            <div class="col-span-1 flex flex-col mt-1">
                                <label for="category"
                                    class=" block text-sm font-medium leading-6 text-gray-900">Prodduct Category</label>
                                <select name="category_id" id="category"
                                    class="block w-full  px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                    <option selected disabled></option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="md:col-span-2 col-span-1 grid md:grid-cols-3 grid-cols-1 gap-x-6 gap-y-2">
                                <div class="col-span-1 flex flex-col mt-1">
                                    <label for="price"
                                        class=" block text-sm font-medium leading-6 text-gray-900">Item Price</label>
                                    <input type="text" id="price"
                                        class="block w-full  px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                                        name="price" :value="old('price')" />
                                </div>

                                <div class="col-span-1 flex flex-col mt-1">
                                    <label for="discount"
                                        class=" block text-sm font-medium leading-6 text-gray-900">Discount</label>
                                    <input type="text" id="discount"
                                        class="block w-full  px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                                        name="discount" :value="old('discount')" />
                                </div>

                                <div class="col-span-1 flex flex-col mt-1">
                                    <label for="quantity"
                                        class=" block text-sm font-medium leading-6 text-gray-900">Quantity</label>
                                    <input type="text" id="quantity"
                                        class="block w-full  px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                                        name="quantity" :value="old('quantity')" />
                                </div>
                            </div>


                            <div class="flex flex-col md:col-span-2 mt-1">
                                <label for="markdown-editor"
                                    class=" block text-sm font-medium leading-6 text-gray-900">Item Description</label>
                                <textarea name="description" id="markdown-editor" rows="6"
                                    class="block w-full  px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                                    placeholder="Enter a description for this product to give more details about it.">
                                    {!! old('description') !!}</textarea>
                            </div>

                            <div class="md:col-span-2 mt-1">
                                <label for="markdown-editor" :value="__('Product Image')" class="mb-2"
                                    class=" block text-sm font-medium leading-6 text-gray-900"></label>
                                {{-- <x-dropzone name="images[][src]" data-max-file-size="10M" multiple /> --}}
                            </div>

                            <div class="col-span-1 flex flex-col mt-1">
                                <label for="image"
                                    class=" block text-sm font-medium leading-6 text-gray-900">image</label>
                                <input type="text" id="image"
                                    class="block w-full  px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                                    name="image" :value="old('image')" />
                            </div>

                            <div class="md:col-span-2 col-span-1">
                                <div class="float-right">
                                    <button
                                        class="flex w-full justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600;">Create</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-tailwind-layout>
