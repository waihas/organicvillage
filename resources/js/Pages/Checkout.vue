<template>
    <!-- <order-checkout /> -->
  <div class="home">
      <section class="max-w-7xl mx-auto flex flex-col justify-center py-8 mt-6 mb-10 bg-white">
        <h2 class="w-full my-2 text-4xl font-black leading-tight text-center text-gray-800">
            Checkout
        </h2>
        <div class="w-full mb-8">
            <div class="h-1 mx-auto bg-primary-light w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>

            <div class="flex flex-wrap justify-between mt-5 items-start">
                <div class="order-2 md:order-1 w-full mb-6 lg:mb-0 lg:w-2/3 px-4 flex flex-col">
                    <div class="flex flex-col border rounded-lg">
                        <div class="mb-4 bg-white overflow-hidden rounded-t-lg">
                            <div class="px-6">
                                <p class="text-gray-800 pt-4 uppercase font-bold text-2xl">Informations</p>
                            </div>
                            <div class="p-6 m-2">
                                <customer-details-form></customer-details-form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-1 md:order-2 w-full mb-6 lg:mb-0 lg:w-1/3 px-4 lg:sticky" style="top:1.25rem;">
                    <div class="flex-grow bg-white border border-grey-lighter overflow-hidden rounded-lg">
                        <div class="px-6 mb-2">
                            <p class="text-gray-800 py-4 uppercase font-bold text-2xl">Your Order</p>
                        </div>

                        <div v-show="!products.length" class="px-6 mb-3">
                            <p class="text-gray-600">Your cart is empty!</p>
                            <router-link :to="{name: 'products'}" class="font-medium text-primary-dark hover:text-primary-default">Go shopping</router-link>
                        </div>

                        <div v-show="products.length" class="px-6 mb-3">
                            <div v-for="(p, idx) in products" :key="idx" class="flex justify-between mt-6">
                                <div class="flex">
                                    <img class="h-20 w-20 object-cover rounded"
                                        :src="p.image"
                                        :alt="p.name">
                                    <div class="mx-3">
                                        <h3 class="text-sm text-gray-600">
                                            {{ p.name }}
                                            <span v-if="p.option" class="italic">
                                                <br>
                                                {{ p.option }}
                                            </span>
                                        </h3>
                                        <div class="flex items-center mt-2">
                                            <button @click="decrementQty(product.id)"
                                                class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            </button>
                                            <span class="text-gray-800 mx-2">{{ p.quantity }}</span>
                                            <button @click="incrementQty(product.id)"
                                                class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-gray-900 whitespace-nowrap">{{ p.price }} DH</span>
                            </div>
                        </div>

                        <hr class="my-4">
                        
                        <coupon></coupon>
                        
                        <hr class="my-4">
                        
                        <div class="flex justify-between items-center mb-8">
                            <div class="w-1/2 pl-6">
                                <div class="w-full">
                                    <span class="text-gray-800 text-sm">Livraison</span>
                                </div>
                                <div class="w-full">
                                    <span class="text-gray-800 text-sm">Discount</span>
                                </div>
                                <hr class="my-5">
                                <div class="w-full">
                                    <span class="text-gray-800 font-bold">Total</span>
                                </div>
                            </div>
                            <div class="w-1/2 pr-6 text-right">
                                <div class="w-full">
                                    <span class="text-gray-800 text-sm">50 MAD</span>
                                </div>
                                <div class="w-full">
                                    <span class="text-gray-800 text-sm">0 MAD</span>
                                </div>
                                <hr class="my-5">
                                <div class="w-full">
                                    <span class="text-gray-800 font-bold">
                                        {{ total + 50 }} MAD
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'
import CustomerDetailsForm from '../components/Checkout/CustomerDetailsForm.vue'
import Coupon from '../components/Checkout/Coupon.vue'
// import OrderCheckout from '../components/Checkout/OrderCheckout.vue';

export default {
    name: 'Checkout',

    components: {
        CustomerDetailsForm,
        Coupon
    },

    metaInfo () {
        return { title: 'Checkout' }
    },

    computed: {
        ...mapGetters({
            products: 'cart/cart'
        }),
        total () {
            return this.products.reduce((total, p) => {
                return total + p.price * p.quantity
            }, 0)
        }
    },

    methods: {
        incrementQty(id) {
            this.$store.dispatch('cart/incrementQty', {id})
        },
        decrementQty(id) {
            this.$store.dispatch('cart/decrementQty', {id})
        },
    }
}
</script>