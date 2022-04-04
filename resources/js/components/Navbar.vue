<template>
  <div id="header" class="fixed w-full z-30 top-0 text-white bg-primary-gray">
    <div class="flex flex-row max-w-screen-xl px-4 mx-auto items-center justify-between md:px-6 lg:px-8">
        <div class="px-4">
          <a target="_blank" href="http://wa.me/212613231346">
            <span class="hidden sm:block">Contact us</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:hidden fill-current text-white" viewBox="0 0 24 24">
              <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.5 17.311l-1.76-3.397-1.032.505c-1.12.543-3.4-3.91-2.305-4.497l1.042-.513-1.747-3.409-1.053.52c-3.601 1.877 2.117 12.991 5.8 11.308l1.055-.517z"/>
            </svg>
          </a>
        </div>
        <div class="md:px-4 flex flex-row items-center justify-between">
            <router-link :to="{ name: 'home' }">
                <img id="toggleColour" src="/img/main-logo.svg"
                    class="w-24 md:w-32 py-1" alt="Organic Village Logo">
            </router-link>
        </div>
        <div class="px-4 md:w-24 flex flex-row items-center justify-center ">
            <router-link :to="{ name: 'checkout' }" class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current text-white" viewBox="0 0 24 24">
                  <path d="M4.558 7l4.701-4.702c.199-.198.46-.298.721-.298.613 0 1.02.505 1.02 1.029 0 .25-.092.504-.299.711l-3.26 3.26h-2.883zm12.001 0h2.883l-4.701-4.702c-.199-.198-.46-.298-.721-.298-.613 0-1.02.505-1.02 1.029 0 .25.092.504.299.711l3.26 3.26zm3.703 4l-.016.041-3.598 8.959h-9.296l-3.597-8.961-.016-.039h16.523zm3.738-2h-24v2h.643c.534 0 1.021.304 1.256.784l4.101 10.216h12l4.102-10.214c.233-.481.722-.786 1.256-.786h.642v-2z"/>
                </svg>
            </router-link>
            <span class="ml-2">{{itemsInCart}}</span>
        </div>
    </div>

    <!-- <cart></cart> -->

  </div>
</template>

<script>
export default {
  name: 'navbar',

  computed: {
    itemsInCart(){
      let cartProducts = this.$store.getters['cart/cartProducts'];
      let cartGammes = this.$store.getters['cart/cartGammes'];
      return cartProducts.reduce((accum, item) => accum + item.quantity, 0) + cartGammes.reduce((accum, item) => accum + item.quantity, 0)
    }
  }

  // components: {
  //   Cart
  // }

  // data() {
  //   return {
  //     isOpen: false,
  //   }
  // },

}
</script>