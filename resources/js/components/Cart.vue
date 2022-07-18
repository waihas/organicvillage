<template>
    <div as="template" v-if="open">
        <div as="div" class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <transition as="template"
                    enter-active-class="ease-in-out duration-500"
                    enter-class="opacity-0"
                    enter-to-class="opacity-100"
                    leave-active-class="ease-in-out duration-500"
                    leave-class="opacity-100"
                    leave-to-class="opacity-0"
                    appear>
                    <div class="absolute inset-0 bg-primary-gray bg-opacity-50 transition-opacity"
                     @click="toggleOpen(false)"></div>
                </transition>

                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                    <transition as="template"
                        enter-active-class="transform transition ease-in-out duration-500 sm:duration-700"
                        enter-class="translate-x-full"
                        enter-to-class="translate-x-0"
                        leave-active-class="transform transition ease-in-out duration-500 sm:duration-700"
                        leave-class="translate-x-0"
                        leave-to-class="translate-x-full"
                        appear>
                        <div class="pointer-events-auto w-screen max-w-md">
                            <!-- overflow-y-scroll -->
                            <div class="flex h-full flex-col bg-white shadow-xl">
                                <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                                    <div class="flex items-start justify-between">
                                        <h4 class="text-lg font-medium text-gray-900"> Shopping cart </h4>
                                        <div class="ml-3 flex h-7 items-center">
                                            <button type="button" class="-m-2 p-2 text-gray-400 hover:text-gray-500" @click="toggleOpen(false)">
                                                <span class="sr-only">Close panel</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" aria-hidden="true" viewBox="0 0 24 24">
                                                    <path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="mt-8">
                                        <div class="flow-root">
                                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                                                <li v-for="(product, idx) in products" :key="idx" class="flex py-6">
                                                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                        <img :src="product.image" :alt="product.name" class="h-full w-full object-cover object-center" />
                                                    </div>

                                                    <div class="ml-4 flex flex-1 flex-col">
                                                        <div>
                                                            <div class="flex justify-between text-base font-medium text-gray-900">
                                                                <h3>
                                                                    {{ product.name }}
                                                                </h3>
                                                                <p class="ml-4 whitespace-nowrap">{{ product.price }} MAD</p>
                                                            </div>
                                                            <p v-if="product.option" class="mt-1 text-sm text-gray-500">
                                                                {{ product.option }}
                                                            </p>
                                                        </div>
                                                        <div class="flex flex-1 items-end justify-between text-sm">
                                                            <div class="flex items-center mt-2">
                                                                <button @click="decrementQty(product.id, product.option_id)"
                                                                    class="text-gray-500 hover:text-primary-dark focus:outline-none focus:text-gray-600">
                                                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                                </button>
                                                                <span class="text-gray-500 mx-2">{{ product.quantity }}</span>
                                                                <button @click="incrementQty(product.id, product.option_id)"
                                                                    class="text-gray-500 hover:text-primary-dark focus:outline-none focus:text-gray-600">
                                                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                                </button>
                                                            </div>
                                                            <!-- <div class="flex">
                                                                <button type="button" class="font-medium text-primary-dark hover:text-primary-default">Remove</button>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p v-show="!products.length" class="text-gray-600">Your cart is empty!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                                    <div class="flex justify-between text-sm text-gray-600 mb-2">
                                        <p>Livraison</p>
                                        <p>50 MAD</p>
                                    </div>
                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                        <p>Subtotal</p>
                                        <p>{{total + 50}} MAD</p>
                                    </div>
                                    <!-- <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p> -->
                                    <div class="mt-6">
                                        <button @click="toCheckout" type="button" class="w-full flex items-center justify-center rounded-md border border-transparent bg-primary-dark px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-primary-default">
                                            Checkout
                                        </button>
                                    </div>
                                    <!-- <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                        <p>
                                        or <button type="button" @click="continueShopping" class="font-medium text-primary-dark hover:text-primary-default">Continue Shopping<span aria-hidden="true"> &rarr;</span></button>
                                        </p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </transition>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    name: "Cart",

    computed: {
        ...mapGetters({
            products: 'cart/cart',
            open: 'cart/cartOpen'
        }),
        total () {
            return this.products.reduce((total, p) => {
                return total + p.price * p.quantity
            }, 0)
        }
    },

    methods: {
        toggleOpen(val) {
            // this.open = val
            this.$store.dispatch('cart/toggleCart')
        },
        incrementQty(id, optionId) {
            this.$store.dispatch('cart/incrementQty', {id, optionId})
        },
        decrementQty(id, optionId) {
            this.$store.dispatch('cart/decrementQty', {id, optionId})
        },
        toCheckout() {
            this.$store.dispatch('cart/toggleCart')
            this.$router.push({ name: 'checkout' })
        },
        continueShopping() {
            if(this.$route.name != 'products')
                this.$router.push({ name: 'products' })
            
            this.$store.dispatch('cart/toggleCart')
        }
    }
}
</script>