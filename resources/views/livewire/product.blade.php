
<div class="bg-white">
    <div class="pb-16 pt-6 sm:pb-24">
         <div class="mx-auto mt-8 max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="lg:grid lg:auto-rows-min lg:grid-cols-12 lg:gap-x-8">
                <div class="lg:col-span-5 lg:col-start-8">
                    <div class="flex justify-between">
                        <h1 class="text-xl font-medium text-gray-900">{{$this->product->name}}</h1>
                        <p class="text-xl font-medium text-gray-900">{{$this->product->price}}</p>
                    </div>

                </div>

                <!-- Image gallery -->
                <div class="mt-8 lg:col-span-7 lg:col-start-1 lg:row-span-3 lg:row-start-1 lg:mt-0">
                    <h2 class="sr-only">Images</h2>

                    <div x-data="{image: '{{$this->product->image->path}}' }" class="grid grid-cols-1   lg:grid-rows-3 lg:gap-8">

                        <img :src="image" alt="Back of women&#039;s Basic Tee in black." class="lg:col-span-2 lg:row-span-2 rounded-lg">

                        <div class="grid grid-cols-3 gap-x-6 mt-6">
                       @foreach($this->product->images as $image)
                        <img @click="image = '{{$image->path}}'" src="{{$image->path}}" alt="Back of women&#039;s Basic Tee in black." class="flex w-80  rounded-lg">
                        @endforeach
                        </div>

                    </div>
                </div>

                <div class="mt-8 lg:col-span-5">
                    <form>


                        <!-- Size picker -->
                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <h2 class="text-sm font-medium text-gray-900">Size and Color</h2>
                             </div>

                            <label>
                                <select wire:model.change="variant"  class="block w-full rounded-md border-1 py-1.5 pl-3 pr-10 text-gray-800">
                                    @foreach($this->product->variants as $variant)
                                        <option value="{{$variant->id}}" >{{$variant->size}}/{{$variant->color}}</option>
                                    @endforeach
                                </select>
                            </label>

                            @error('$variant')
                                <div class="mt-2 text-red-600"> {{$message}} </div>
                            @enderror
                        </div>
                        <x-button wire:click="addToCart" class="mt-8 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3
                                  text-base font-medium text-white hover:bg-indigo-700
                                  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to cart</x-button>

                    </form>

                    <!-- Product details -->
                    <div class="mt-10">
                        <h2 class="text-sm font-medium text-gray-900">Description</h2>

                        <div class="prose prose-sm mt-4 text-gray-500">
                             <p>{{$this->product->description}}</p>
                        </div>
                    </div>


                    <!-- Policies -->
                    <section aria-labelledby="policies-heading" class="mt-10">
                        <h2 id="policies-heading" class="sr-only">Our Policies</h2>

                        <dl class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">
                            <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 text-center">
                                <dt>
                                    <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                    <span class="mt-4 text-sm font-medium text-gray-900">International delivery</span>
                                </dt>
                                <dd class="mt-1 text-sm text-gray-500">Get your order in 2 years</dd>
                            </div>
                            <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 text-center">
                                <dt>
                                    <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="mt-4 text-sm font-medium text-gray-900">Loyalty rewards</span>
                                </dt>
                                <dd class="mt-1 text-sm text-gray-500">Don&#039;t look at other tees</dd>
                            </div>
                        </dl>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
