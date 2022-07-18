<template>
  <div class="w-full pt-6">
    <form @submit.prevent="placeorder" @keydown="form.onKeydown($event)">
        <div class="w-full md:flex mx-auto">
            <label for="name" class="w-full md:w-2/5 md:pl-6 text-gray-800 block mb-2 tracking-wide">
                Nom complet</label>
                <div class="flex flex-col w-full">
                  <input class="w-full mb-2 bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-primary-default"
                  :class="{ 'border-red-500': form.errors.has('name') }"
                  v-model="form.name" type="text"
                  placeholder="Nom complet">
                  <has-error class="mb-2 text-sm text-red-600" :form="form" field="name" />
                </div>
        </div>
        
        <div class="w-full md:flex mx-auto mt-2">
            <label for="phone" class="w-full md:w-2/5 md:pl-6 text-gray-800 block mb-2 tracking-wide">
                Téléphone</label>
              <div class="flex flex-col w-full">
                <input class="w-full mb-2 bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-primary-default"
                  :class="{ 'border-red-500': form.errors.has('phone') }"
                  v-model="form.phone" type="text"
                  placeholder="06 00 00 00 00">
                <has-error class="mb-2 text-sm text-red-600" :form="form" field="phone" />
              </div>
        </div>

        <div class="w-full md:flex mx-auto mt-2">
            <label for="city" class="w-full md:w-2/5 md:pl-6 text-gray-800 block mb-2 tracking-wide">
                Ville</label>
              <div class="flex flex-col w-full">
                <select v-model="form.city" name="city" class="w-full mb-2 bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-primary-default"
                  :class="{ 'border-red-500': form.errors.has('city') }">
                    <option value="agadir">Agadir</option>
                    <option value="autres">Autres</option>
                </select>
                <has-error class="mt-2 text-sm text-red-600" :form="form" field="city" />
              </div>
        </div>

        <div class="w-full md:pl-6 md:flex mx-auto mt-2 flex items-center">
            <input id="terms" v-model="form.terms" type="checkbox" class="w-4 h-4 text-primary-default transition duration-150 ease-in-out" />
            <label for="terms" class="block ml-2 text-sm text-gray-900 leading-5">
                I agree to the <router-link class="text-gray-700 hover:text-primary-default" :to="{name: 'legal.terms'}">Terms & Conditions</router-link>
            </label>
        </div>
        <has-error class="md:pl-6 text-sm text-red-500 font-semibold mt-2" :form="form" field="terms" />
        
        <div class="w-full md:w-1/2 mx-auto mt-6">
            <button
              type="submit"
              :disabled="form.busy"
              class="bg-primary-dark text-white font-bold py-2 px-4 rounded w-full transition-all duration-100 ease-in-out"
              :class="!form.busy ? 'hover:bg-primary-default' : 'opacity-75 cursor-default' "
            >
              <span v-if="!form.busy" class="text-lg">Place order</span>
              <!-- <div v-if="form.busy"
                class="w-7 h-7 animate-spin mx-auto rounded-full border-3 border-white border-b-transparent">
              </div> -->
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                v-if="form.busy" class="w-7 h-7 animate-spin mx-auto text-gradient-to-r from-purple-400 via-blue-500 to-red-400" fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M13,3.233L13,3.233c0,0.454,0.302,0.867,0.745,0.966c3.711,0.829,6.46,4.238,6.243,8.242 c-0.221,4.086-3.662,7.437-7.752,7.555C7.718,20.127,4,16.49,4,12c0-3.807,2.675-6.996,6.243-7.798C10.69,4.101,11,3.693,11,3.235 V3.234c0-0.64-0.595-1.126-1.219-0.985C5.151,3.302,1.732,7.576,2.017,12.58c0.289,5.093,4.568,9.256,9.666,9.415 C17.341,22.171,22,17.619,22,12c0-4.753-3.334-8.741-7.785-9.752C13.593,2.107,13,2.595,13,3.233z"></path>
              </svg>
            </button>
        </div>
    </form>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Form from 'vform'

export default {
    name: "CustomerDetails",

    data: () => ({
      form: new Form({
        name: '',
        phone: '',
        city: 'agadir',
        terms: false
      }),
    }),

    computed: {
        ...mapGetters({
            products: 'cart/cart'
        }),
    },

    methods: {
      async placeorder() {

        let total = this.products.reduce((total, p) => {
                return total + p.price * p.quantity
            }, 0);

        let cart = {
          products: this.products,
          total: total,
        }

        this.form.update(cart);

        const { data } = await this.form.post('/api/placeOrder')

        // empty cart
        this.$router.push({ name: 'checkout.success', params: { orderId: data.orderId } })
      }
    }
};
</script>