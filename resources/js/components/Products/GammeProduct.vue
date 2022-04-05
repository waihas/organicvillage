<template>
    <div class="bg-white shadow-lg cursor-pointer rounded transform hover:scale-105 duration-300 ease-in-out h-full">
        <div class="">
            <img :src="gamme.image"
                :alt="gamme.name"
                class="w-full h-32 md:h-64 mx-auto rounded-t">
        </div>
        <div class="p-4">
            <h2 class="text-base md:text-xl uppercase">
                {{gamme.name}}
            </h2>
            <!-- <p class="font-light text-gray-500 text-lg my-2">
                {{ $gamme->item->special_price ?? $gamme->item->price }} {{ config('settings.currency_symbol') }}
            </p> -->
            <p class="font-light text-gray-600 my-2">
                <!-- <i class="text-gray-500 line-through"> MAD</i>
                <span class="font-bold">
                    {{gamme.price}} MAD
                </span> -->
                <span class="text-primary-gray">
                    {{ gamme.price }} MAD
                </span>
            </p>
            <p v-if="gamme.description">
                {{ gamme.description }}
            </p>
            <div class="flex flex-wrap text-sm mt-3">
                <ul>
                    <li v-for="(product, index) in gamme.products" :key="index" class="flex items-center">
                        <div class="rounded-full pl-0 p-2 md:pl-2 fill-current text-green-700">
                            <svg class="w-3 h-3 md:w-6 md:h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01" ></polyline>
                            </svg>
                        </div>
                        <span class="text-gray-700 text">{{product}}</span>
                        <!-- &bull; 500 ml -->
                    </li>
                </ul>
            </div>
            <button type="button" @click="addItemToCart()"
                class="w-full text-sm md:text-base block bg-primary-default py-2 px-2 text-white text-center md:rounded shadow-lg uppercase font-light mt-6 hover:bg-primary hover:text-white duration-300 ease-in-out">
                Add to cart
            </button>
        </div>
    </div>
</template>

<script>
import { mapActions } from 'vuex'

export default {
    name: "GammeProduct",

    props: ['gamme'],

    methods: {
        ...mapActions('cart',{
            addToCart: 'addToCart',
        }),
        addItemToCart() {
            var payload = {
                'productId': this.gamme.id,
                'price': this.gamme.price,
                'option': ''
            }
            this.addToCart(payload)
        }
    }
}
</script>