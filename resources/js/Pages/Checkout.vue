<template>
    <!-- <order-checkout /> -->
  <div class="home">
      <section class="max-w-7xl mx-auto flex flex-col justify-center py-8 mt-16 mb-10 bg-white">
        <h2 class="w-full my-2 text-4xl font-black leading-tight text-center text-gray-800">
            Checkout
        </h2>
        <div class="w-full mb-8">
            <div class="h-1 mx-auto bg-primary-light w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>

            <div class="flex flex-wrap justify-between mt-5 items-start">
                <div class="w-full mb-6 lg:mb-0 lg:w-2/3 px-4 flex flex-col">
                    <div class="flex flex-col border rounded-lg">
                        <div class="mb-4 bg-white overflow-hidden rounded-t-lg">
                            <div class="px-6">
                                <p class="text-gray-800 pt-4 uppercase font-bold text-2xl">Informations</p>
                            </div>
                            <div class="p-6 m-2">
                                <div class="w-full pt-6">
                                    <form wire:submit.prevent="placeOrder" role="form">
                                        <div class="w-full md:flex mx-auto">
                                            <label for="fullname" class="w-full md:w-2/5 md:pl-6 text-gray-800 block mb-2 tracking-wide">
                                                Nom complet</label>
                                            <input class="w-full md:w-1/2 mb-2 bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                            @error('fullname') border-red-500 @enderror
                                            "
                                            id="fullname" wire:model.lazy="fullname" type="text"
                                            placeholder="Prénom Nom">
                                        </div>
                                        <div class="w-full md:flex md:justify-end mx-auto">
                                            <!-- @error('fullname')
                                                <p class="text-xs mx-auto italic text-red-500">{{ $message }}</p>
                                            @enderror -->
                                        </div>
                                        <div class="w-full md:flex mx-auto mt-2">
                                            <label for="phone" class="w-full md:w-2/5 md:pl-6 text-gray-800 block mb-2 tracking-wide">
                                                Téléphone</label>
                                            <input class="w-full md:w-1/2 mb-2 bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                            @error('phone') border-red-500 @enderror"
                                            id="phone" wire:model.lazy="phone" type="text"
                                            placeholder="06 XX XX XX XX">
                                        </div>
                                        <div class="w-full md:flex md:justify-end mx-auto">
                                            <!-- @error('phone')
                                                <p class="text-xs mx-auto italic text-red-500">{{ $message }}</p>
                                            @enderror -->
                                        </div>
                                        
                                        <div class="w-full md:flex mx-auto mt-2">
                                            <label for="ville" class="w-full md:w-2/5 md:pl-6 text-gray-800 block mb-2 tracking-wide">
                                                Ville</label>
                                                <select wire:model.lazy="ville" class="w-full md:w-1/2 mb-2 bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                                @error('ville') border-red-500 @enderror">
                                                <option value="">Sélectionner</option>
                                                <!-- @if (!is_null(json_decode(config('settings.villes'))))
                                                    @foreach (json_decode(config('settings.villes')) as $ville)
                                                        <option value="{{ $ville }}">
                                                            {{ $ville }}
                                                        </option>
                                                    @endforeach
                                                @endif -->
                                            </select>
                                        </div>
                                        <div class="w-full md:flex md:justify-end mx-auto">
                                            <!-- @error('ville')
                                                <p class="text-xs mx-auto italic text-red-500">{{ $message }}</p>
                                            @enderror -->
                                        </div>
                                        
                                        <div class="w-full md:w-1/2 mx-auto mt-6">
                                                <!-- @if(Cart::content()->count() < 1) disabled @endif -->
                                            <button type="submit"
                                                wire:loading.remove
                                                wire:target="placeOrder"
                                                class="w-full text-white bg-primary-dark hover:bg-primary font-semibold py-2 px-4 rounded @if(Cart::content()->count() < 1) cursor-not-allowed @endif">
                                                Confirmer
                                            </button>
                                            <button 
                                                type="button"
                                                wire:loading
                                                wire:target="placeOrder"
                                                class="w-full text-white bg-primary-dark hover:bg-primary font-semibold py-2 px-4 rounded"
                                                >
                                                <div class="animate-spin mx-auto rounded-full py-2 h-8 w-8 border-t-2 border-b-2 border-white"></div>
                                            </button>
                                            <p class="text-xs text-center md:pl-6 mt-2 text-gray-600">
                                                By clicking the 'Confirmer' button, you confirm that you accept our Terms of use and Privacy Policy.
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full mb-6 lg:mb-0 lg:w-1/3 px-4 lg:sticky" style="top:1.25rem;">
                    <div class="flex-grow bg-white border border-grey-lighter overflow-hidden rounded-lg">
                        <div class="px-6 mb-2">
                            <p class="text-gray-800 py-4 uppercase font-bold text-2xl">Your Order</p>
                        </div>
                            <!-- @if (Cart::content()->count() < 1)
                                <div class="px-6 mb-3">
                                    <p class="text-red-500">Your shopping cart is empty.</p>
                                </div>
                            @else -->
                            <div class="px-6 mb-3">
                                <!-- @foreach (Cart::content() as $item)
                                    <div class="flex justify-between mt-6">
                                        <div class="flex">
                                            @if ($item->options->image)
                                            <img class="h-20 w-20 object-cover rounded"
                                                src="{{ $item->options->image }}"
                                                alt="{{$item->name}}">
                                            @endif
                                            <div class="mx-3">
                                                <h3 class="text-sm text-gray-600">{{ $item->name }}</h3>
                                                <div class="flex items-center mt-2">
                                                    <button
                                                        wire:click="updateQty('{{ $item->rowId }}', '{{$item->qty - 1}}')"
                                                        class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    </button>
                                                    <span class="text-gray-800 mx-2">{{ $item->qty }}</span>
                                                    <button 
                                                        wire:click="updateQty('{{ $item->rowId }}', '{{$item->qty + 1}}')"
                                                        class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-gray-600">{{ $item->priceTotal .' '. config('settings.currency_symbol') }}</span>
                                    </div>
                                @endforeach -->
                            </div>
                        <!-- @endif -->
                        <hr class="my-4">
                        <div class="flex justify-between items-center mb-8">
                            <div class="w-1/2 pl-6">
                                <div class="w-full">
                                    <span class="text-gray-800 text-sm">Subtotal</span>
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
                                    <!-- <span class="text-gray-800 text-sm">{{ Cart::initial() }} {{ config('settings.currency_symbol') }}</span> -->
                                </div>
                                <div class="w-full">
                                    <!-- <span class="text-gray-800 text-sm">- {{ Cart::discount() }} {{ config('settings.currency_symbol') }}</span> -->
                                </div>
                                <hr class="my-5">
                                <div class="w-full">
                                    <!-- <span class="text-gray-800 font-bold">{{ Cart::subtotal() }} {{ config('settings.currency_symbol') }}</span> -->
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
// import { mapState } from 'vuex';
// import OrderCheckout from '../components/Checkout/OrderCheckout.vue';

export default {
  name: 'Checkout',

//   components: { OrderCheckout },
//   computed: {
//     ...mapState({
//       count: state => state.count
//     }),
//   }
}
</script>