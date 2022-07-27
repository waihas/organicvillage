<template>
  <div class="transform duration-500 ease-in-out scale-100 hover:scale-105 h-full">
    <img :src="product.image"
        :alt="product.name"
        class="w-full h-32 md:h-64 object-cover object-center mx-auto rounded-lg shadow-md"
        loading="lazy">
    <div class="relative px-6 md:px-4 -mt-6 md:-mt-16 lg:h-64">
        <!-- <div class="md:hidden">
            <button type="button" @click="addItemCart()" 
                class="w-full text-sm md:text-base block bg-primary-default py-2 px-2 text-white text-center md:rounded shadow-lg uppercase font-light mt-6 hover:bg-primary hover:text-white duration-300 ease-in-out">
                Add to cart
            </button>
        </div> -->
        <div class="bg-white p-4 md:p-6 rounded-2xl lg:rounded-lg shadow-lg h-full grid grid-rows-3 md:grid-rows-4 grid-flow-col">
            <!-- <div class="flex items-baseline">
                <span class="bg-secondary mb-2 text-white text-xs px-2 inline-block rounded-full uppercase font-semibold tracking-wide">
                    120 ml
                </span>
            </div> -->
            <div class="row-span-1 md:row-span-2">
                <h4 class="md:text-xl uppercase leading-tight">
                    {{product.name}}
                </h4>
                <div v-if="product.description" class="mt-1">
                    <span class="text-sm text-gray-600">
                    {{product.description}}
                    </span>
                </div>
                <div v-else class="mt-1">
                    <span class="text-sm text-white">Cosmetique Maroc</span>
                </div>
            </div>
            <div class="mt-4 flex flex-row items-center row-span-1"
                :class="product.price != 0 ? 'justify-end' : 'justify-between'">
                <!-- @if($product->item->special_price)
                <i class="text-gray-500 line-through">{{ $product->item->price }} {{ config('settings.currency_symbol') }}</i>
                <span class="text-gray-600 font-bold">
                    {{ $product->item->special_price }} {{ config('settings.currency_symbol') }}
                </span>
                @else -->
                <div v-if="product.price == 0" class="flex w-1/2 md:w-auto items-center">
                    <div class="relative">
                        <select @change="selectedProductChanged" v-model="selectedId" class="rounded border appearance-none border-gray-300 py-2 text-sm focus:outline-none pl-3 pr-3 md:pr-10 w-full md:w-auto">
                            <option v-for="item in product.prices" :key="item.id" :value="item.id">
                                <!-- :value="{id: item.id, weight: item.weight, price: item.price}" -->
                                {{item.weight}}
                            </option>
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
                        {{selectedProduct.price}} MAD
                    </span>
                </div>
            </div>
            <!-- <div class="hidden md:block md:row-span-1"> -->
            <div class="block row-span-1">
                <button type="button" @click="addItemCart()"
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
            selectedId: '',
            selectedProduct: {
                id: null,
                weight: '',
                price: '',
            },
        }
    },
    created() {
        if (this.product.prices[0]) {
            this.selectedId = this.product.prices[0].id;
            this.selectedProduct = this.product.prices[0];
        }
        // console.log(this.product.prices[0].id);
    },
    // mounted() {
    //     console.log(this.product)

    //     if (Object.keys(this.product.prices).length) {
    //         const item = Object.values(this.product.prices)[0];
    //         this.selectedProductId = item.id;
    //         this.selectedProductName = item.weight;
    //         this.selectedProductPrice = item.price;
    //     }
    // },
    // watch: {
    //     selectedProductId(newVal, old) {
            
    //         // let item = null;

    //         Object.entries(this.product.prices).map( function(value) {
    //             // // console.log('value ' + value + 'newVal' + newVal)
    //             // // if(newVal == key)
    //             // console.log('value: ' + JSON.stringify(value[1]))
    //             // console.log(value[1]['id'])
    //             if (value[1]?.id == newVal) {
    //                 console.log('yes: ' + value[1]?.id);
    //                 console.log('yes: ' + value[1]?.weight);
    //                 console.log('yes: ' + value[1]?.price);
    //                 this.selectedProductId = value[1]?.id;
    //                 this.selectedProductName = value[1]?.weight;
    //                 this.selectedProductPrice = value[1]?.price;
    //             }
    //             // else {
    //             //     console.log('no')
    //             // }
    //         });

    //         // console.log('this.selectedProductName' + this.selectedProductName)

    //         // this.product.prices.forEach((el, index) => {
    //         //     console.log(el + " " + index)
    //         //     // if (el.word === newVal) state.index =  index;
    //         //     })
    //         // console.log(this.product.indexOf(newVal))
    //         // for(product in this.product.prices) {
    //         //     if(product.value == newQuestion) {
    //         //         this.selectedProductName = product.key
    //         //         console.log(product.key);
    //         //     }
    //         // }
    //     }
    // },
    methods: {
        ...mapActions('cart',{
            addToCart: 'addToCart',
        }),
        addItemCart() {
            if(this.product.price == 0) {
                var payload = {
                    'productId': this.product.id,
                    'price': this.selectedProduct.price,
                    'optionId': this.selectedProduct.id,
                    'option': this.selectedProduct.weight
                }
                this.addToCart(payload)
            }
            else {
                var payload = {
                    'productId': this.product.id,
                    'price': this.product.price,
                    'optionId': '',
                    'option': ''
                }
                this.addToCart(payload)
            }
        },
        selectedProductChanged() {
            let item = this.product.prices.find(p => p.id === this.selectedId)
            if(item) {
                this.selectedProduct = item;
            }
        }
    }
}
</script>