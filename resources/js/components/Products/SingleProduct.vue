<template>
  <div class="transform duration-500 ease-in-out scale-100 hover:scale-105">
    <img src="https://picsum.photos/seed/picsum/200/300"
        alt="Product name"
        class="w-full object-cover object-center md:rounded-lg shadow-md"
        loading="lazy">    
    <div class="relative md:px-4 -mt-6 md:-mt-16">
        <div class="md:hidden">
            <button type="button"
                class="w-full text-sm md:text-base block bg-primary-default py-2 px-2 text-white text-center md:rounded shadow-lg uppercase font-light mt-6 hover:bg-primary hover:text-white duration-300 ease-in-out">
                Add to cart
            </button>
        </div>
        <div class="bg-white p-6 lg:rounded-lg shadow-lg">
            <div class="flex items-baseline">
                <span class="bg-secondary mb-2 text-white text-xs px-2 inline-block rounded-full uppercase font-semibold tracking-wide">
                    120 ml
                </span>
            </div>
            <h4 class="md:text-xl uppercase leading-tight truncate">
                Product nice one
            </h4>
            <div class="mt-1">
                <span class="text-sm text-gray-600">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </span>
            </div>
            <div class="mt-4">
                <!-- @if($product->item->special_price)
                <i class="text-gray-500 line-through">{{ $product->item->price }} {{ config('settings.currency_symbol') }}</i>
                <span class="text-gray-600 font-bold">
                    {{ $product->item->special_price }} {{ config('settings.currency_symbol') }}
                </span>
                @else -->
                <span class="text-gray-600 font-bold">
                    400 MAD
                </span>
                <!-- @endif -->
            </div>
            <div class="hidden md:block">
                <button type="button"
                  class="w-full text-sm md:text-base block bg-primary-default py-2 px-2 text-white text-center md:rounded shadow-lg uppercase font-light mt-6 hover:bg-primary hover:text-white duration-300 ease-in-out">
                  Add to cart
              </button>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SingleProduct"
}
</script>