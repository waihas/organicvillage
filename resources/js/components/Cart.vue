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

                                    <!-- Loading cart bar -->
                                    <div class="w-full py-2 text-gray-700 text-sm">	
                                        <h3 class="text-center mb-3">You are 540 MAD away from getting free shipping*</h3>
                                        <div class="flex pb-3 relative">

                                            <!-- 9bl free shipping -->
                                            <div class="w-1/12 md:w-2/12 align-center items-center align-middle content-center flex">
                                                <div class="w-full bg-gray-300 rounded items-center align-middle align-center flex-1">
                                                    <div class="bg-primary-light text-xs leading-none py-1 text-center text-gray-700 rounded"
                                                        style="width: 100%">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="w-2/12 md:w-1/12 z-10">
                                                <!-- <div class="w-1/12 h-12 md:w-10 md:h-10 @if($carttotal > 749) bg-green-500 text-white @else bg-white text-gray-400 border-2 border-grey-light @endif mx-auto rounded-full text-lg flex items-center align-middle"> -->
                                                <div class="w-10 h-10 bg-primary-dark text-white mx-auto rounded-full text-lg flex items-center align-middle">
                                                    <span class="text-center w-full h-full">
                                                        <svg class="w-full h-full fill-current ml-2 mt-2" fill-rule="evenodd" clip-rule="evenodd">
                                                            <path d="M5 11v1h8v-7h-10v-1c0-.552.448-1 1-1h10c.552 0 1 .448 1 1v2h4.667c1.117 0 1.6.576 1.936 1.107.594.94 1.536 2.432 2.109 3.378.188.312.288.67.288 1.035v4.48c0 1.089-.743 2-2 2h-1c0 1.656-1.344 3-3 3s-3-1.344-3-3h-4c0 1.656-1.344 3-3 3s-3-1.344-3-3h-1c-.552 0-1-.448-1-1v-6h-2v-2h7v2h-3zm3 5.8c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm10 0c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm-3-2.8h-10v2h.765c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h5.53c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h1.765v-4.575l-1.711-2.929c-.179-.307-.508-.496-.863-.496h-4.426v6zm1-5v3h5l-1.427-2.496c-.178-.312-.509-.504-.868-.504h-2.705zm-16-3h8v2h-8v-2z"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>

                                            <!-- 5% -->
                                            <div class="w-1/12 md:w-2/12 align-center items-center align-middle content-center flex">
                                                <div class="w-full bg-gray-300 rounded items-center align-middle align-center flex-1">
                                                        <div class="bg-primary-light text-xs leading-none py-1 text-center text-gray-700 rounded"
                                                            style="width: 100%">
                                                        </div>
                                                </div>
                                            </div>
                                            
                                            <div class="w-2/12 md:w-1/12 z-10">
                                                <!-- <div class="w-1/12 h-12 md:w-10 md:h-10 @if($carttotal > 1099) bg-green-500 text-white @else bg-white text-gray-400 border-2 border-grey-light @endif mx-auto rounded-full text-lg flex items-center align-middle"> -->
                                                <div class="w-10 h-10 bg-primary-dark text-white mx-auto rounded-full text-lg flex items-center align-middle">
                                                    <span class="text-center w-full h-full">
                                                        <svg class="w-full h-full fill-current ml-2 mt-2" fill-rule="evenodd" clip-rule="evenodd">
                                                            <path d="M6.178 4c-.914-1.493-2.944-3-6.178-3v-1c4.011 0 6.415 2.11 7.314 4h6.159l10.527 10.625-9.375 9.375-10.625-10.581v-6.242l-.282-.128c-1.043-.476-2.226-1.015-3.718-1.015v-1c1.641 0 2.943.564 4 1.044v-2.078h2.178zm10.944 9.109c-.415-.415-.865-.617-1.378-.617-.578 0-1.227.241-2.171.804-.682.41-1.118.584-1.456.584-.361 0-1.083-.408-.961-1.218.052-.345.25-.697.572-1.02.652-.651 1.544-.848 2.276-.106l.744-.744c-.476-.476-1.096-.792-1.761-.792-.566 0-1.125.227-1.663.677l-.626-.627-.698.699.653.652c-.569.826-.842 2.021.076 2.938 1.011 1.011 2.188.541 3.413-.232.6-.379 1.083-.563 1.475-.563.589 0 1.18.498 1.078 1.258-.052.386-.26.763-.621 1.122-.451.451-.904.679-1.347.679-.418 0-.747-.192-1.049-.462l-.739.739c.463.458 1.082.753 1.735.753.544 0 1.087-.201 1.612-.597l.54.538.697-.697-.52-.521c.743-.896 1.157-2.209.119-3.247zm-9.405-7.109c-.051.445-.215.83-.49 1.114-.387.398-.797.57-1.227.599.008.932.766 1.685 1.699 1.685.938 0 1.699-.761 1.699-1.699 0-.932-.751-1.69-1.681-1.699z"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        
                                            <!-- 7% -->
                                            <div class="w-1/12 md:w-2/12 align-center items-center align-middle content-center flex">
                                                <div class="w-full bg-gray-300 rounded items-center align-middle align-center flex-1">
                                                    <div class="bg-primary-light text-xs leading-none py-1 text-center text-gray-700 rounded"
                                                        style="width: 30%">
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="w-2/12 md:w-1/12 z-10">
                                                <!-- <div class="w-1/12 h-12 md:w-10 md:h-10 @if($carttotal > 1449) bg-green-500 text-white @else bg-white text-gray-400 border-2 border-grey-light @endif mx-auto rounded-full text-lg flex items-center"> -->
                                                <div class="w-10 h-10 bg-white text-gray-400 border-2 border-grey-light mx-auto rounded-full text-lg flex items-center">
                                                    <span class="text-center w-full h-full">
                                                        <svg class="w-full h-full fill-current ml-2 mt-2" fill-rule="evenodd" clip-rule="evenodd">
                                                            <path d="M6.178 4c-.914-1.493-2.944-3-6.178-3v-1c4.011 0 6.415 2.11 7.314 4h6.159l10.527 10.625-9.375 9.375-10.625-10.581v-6.242l-.282-.128c-1.043-.476-2.226-1.015-3.718-1.015v-1c1.641 0 2.943.564 4 1.044v-2.078h2.178zm10.944 9.109c-.415-.415-.865-.617-1.378-.617-.578 0-1.227.241-2.171.804-.682.41-1.118.584-1.456.584-.361 0-1.083-.408-.961-1.218.052-.345.25-.697.572-1.02.652-.651 1.544-.848 2.276-.106l.744-.744c-.476-.476-1.096-.792-1.761-.792-.566 0-1.125.227-1.663.677l-.626-.627-.698.699.653.652c-.569.826-.842 2.021.076 2.938 1.011 1.011 2.188.541 3.413-.232.6-.379 1.083-.563 1.475-.563.589 0 1.18.498 1.078 1.258-.052.386-.26.763-.621 1.122-.451.451-.904.679-1.347.679-.418 0-.747-.192-1.049-.462l-.739.739c.463.458 1.082.753 1.735.753.544 0 1.087-.201 1.612-.597l.54.538.697-.697-.52-.521c.743-.896 1.157-2.209.119-3.247zm-9.405-7.109c-.051.445-.215.83-.49 1.114-.387.398-.797.57-1.227.599.008.932.766 1.685 1.699 1.685.938 0 1.699-.761 1.699-1.699 0-.932-.751-1.69-1.681-1.699z"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        
                                            <!-- 10% -->
                                            <div class="w-1/12 md:w-2/12 align-center items-center align-middle content-center flex">
                                                <div class="w-full bg-gray-300 rounded items-center align-middle align-center flex-1">
                                                    <div class="bg-primary-light text-xs leading-none py-1 text-center text-gray-700 rounded"
                                                        style="width: 0%">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w-2/12 md:w-1/12 z-10">
                                                <div class="w-10 h-10 bg-white text-gray-400 border-2 border-grey-light mx-auto rounded-full text-lg flex items-center">
                                                    <span class="text-center w-full h-full">
                                                        <svg class="w-full h-full fill-current ml-2 mt-2" fill-rule="evenodd" clip-rule="evenodd">
                                                            <path d="M6.178 4c-.914-1.493-2.944-3-6.178-3v-1c4.011 0 6.415 2.11 7.314 4h6.159l10.527 10.625-9.375 9.375-10.625-10.581v-6.242l-.282-.128c-1.043-.476-2.226-1.015-3.718-1.015v-1c1.641 0 2.943.564 4 1.044v-2.078h2.178zm10.944 9.109c-.415-.415-.865-.617-1.378-.617-.578 0-1.227.241-2.171.804-.682.41-1.118.584-1.456.584-.361 0-1.083-.408-.961-1.218.052-.345.25-.697.572-1.02.652-.651 1.544-.848 2.276-.106l.744-.744c-.476-.476-1.096-.792-1.761-.792-.566 0-1.125.227-1.663.677l-.626-.627-.698.699.653.652c-.569.826-.842 2.021.076 2.938 1.011 1.011 2.188.541 3.413-.232.6-.379 1.083-.563 1.475-.563.589 0 1.18.498 1.078 1.258-.052.386-.26.763-.621 1.122-.451.451-.904.679-1.347.679-.418 0-.747-.192-1.049-.462l-.739.739c.463.458 1.082.753 1.735.753.544 0 1.087-.201 1.612-.597l.54.538.697-.697-.52-.521c.743-.896 1.157-2.209.119-3.247zm-9.405-7.109c-.051.445-.215.83-.49 1.114-.387.398-.797.57-1.227.599.008.932.766 1.685 1.699 1.685.938 0 1.699-.761 1.699-1.699 0-.932-.751-1.69-1.681-1.699z"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="flex text-xs content-center text-center">
                                            <div class="w-1/12"></div>
                                            <div class="w-3/12">
                                                Free Shipping
                                            </div>
                                            <div class="w-1/12"></div>
                                            <div class="w-2/12">
                                                5% OFF
                                            </div>
                                            <div class="w-1/12"></div>
                                            <div class="w-2/12">
                                                7% OFF
                                            </div>
                                            <div class="w-1/12"></div>
                                            <div class="w-2/12">
                                                10% OFF
                                            </div>
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