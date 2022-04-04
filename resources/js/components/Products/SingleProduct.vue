<template>
  <div class="transform duration-500 ease-in-out scale-100 hover:scale-105">
    <img :src="product.image"
        :alt="product.name"
        class="w-full h-32 md:h-64 object-cover object-center mx-auto md:rounded-lg shadow-md"
        loading="lazy">    
    <div class="relative md:px-4 -mt-6 md:-mt-16">
        <div class="md:hidden">
            <button type="button" @click="addToCart(product, selectedProductPrice || '')" 
                class="w-full text-sm md:text-base block bg-primary-default py-2 px-2 text-white text-center md:rounded shadow-lg uppercase font-light mt-6 hover:bg-primary hover:text-white duration-300 ease-in-out">
                Add to cart
            </button>
        </div>
        <div class="bg-white p-2 md:p-6 lg:rounded-lg shadow-lg">
            <!-- <div class="flex items-baseline">
                <span class="bg-secondary mb-2 text-white text-xs px-2 inline-block rounded-full uppercase font-semibold tracking-wide">
                    120 ml
                </span>
            </div> -->
            <h4 class="md:text-xl uppercase leading-tight">
                {{product.name}}
            </h4>
            <div v-if="product.description" class="mt-1">
                <span class="text-sm text-gray-600">
                  {{product.description}}
                </span>
            </div>
            <div class="mt-4 flex flex-row justify-between items-center">
                <!-- @if($product->item->special_price)
                <i class="text-gray-500 line-through">{{ $product->item->price }} {{ config('settings.currency_symbol') }}</i>
                <span class="text-gray-600 font-bold">
                    {{ $product->item->special_price }} {{ config('settings.currency_symbol') }}
                </span>
                @else -->
                <div v-if="product.price == 0" class="flex w-1/2 md:w-auto items-center">
                    <div class="relative">
                        <select v-model="selectedProductPrice" class="rounded border appearance-none border-gray-100 py-2 text-sm focus:outline-none pl-3 pr-3 md:pr-10 w-full md:w-auto">
                            <option v-for="(price, index) in product.prices" :key="index" :value="price">{{index}}</option>
                            <!-- v-bind:selected="index === Object.keys(product.prices)[0].trim()" -->
                        </select>
                        <span class="absolute hidden md:flex right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none items-center justify-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="text-primary-gray ml-2 md:ml-0 w-1/2 md:w-auto">
                    <span v-if="product.price != 0">{{product.price}} MAD</span>
                    <span v-else>
                        {{selectedProductPrice}} MAD
                    </span>
                </div>
            </div>
            <div class="hidden md:block">
                <button type="button" @click="addToCart(product, selectedProductPrice || '')"
                  class="w-full text-sm md:text-base block bg-primary-default py-2 px-2 text-white text-center md:rounded shadow-lg uppercase font-light mt-6 hover:bg-primary hover:text-white duration-300 ease-in-out">
                  Add to cart
              </button>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
import { mapActions } from 'vuex'

export default {
    name: "SingleProduct",

    props: ['product'],

    data() {
        return {
            selectedProductPrice: Object.keys(this.product.prices).length ? Object.values(this.product.prices)[0] : 0,
        }
    },

    methods: {
        ...mapActions('cart',{
            addToCart: 'addToCart',
        }),
    }
}
</script>