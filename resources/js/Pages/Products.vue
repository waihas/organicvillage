<template>
  <div>
    <section class="flex flex-col justify-center p-2 md:p-8 mb-10 bg-white">
        <nav class="w-full py-4">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
                <h3 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-700 text-xl">
                    Nos gammmes
                </h3>
            </div>
        </nav>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-8 pt-8 max-w-7xl mx-auto">
            <div v-for="gamme in gammes" :key="gamme.id">
                <gamme-product :gamme="gamme"></gamme-product>
            </div>
        </div>
        <nav class="w-full py-4 mt-8">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
                <h3 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-700 text-xl">
                    Nos produits
                </h3>
            </div>
        </nav>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-8 pt-8 max-w-7xl mx-auto">
            <div v-for="product in products" :key="product.id">
                <single-product :product="product"></single-product>
            </div>
        </div>
    </section>
    
    <!-- @isset($bestseller->products)
    <section class="bg-primary p-4 py-8 md:px-0">
        <h2 class="w-full my-2 text-4xl font-black leading-tight text-center text-white">
            Best Seller
        </h2>
        <div class="w-full mb-8">
            <div class="h-1 mx-auto bg-white w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-8 max-w-7xl mx-auto">
            @foreach ($bestseller->products as $product)
                @include('main.partials.card.product', ['product' => $product, 'color_bg' => 'bg-black'])
            @endforeach
        </div>
    </section>
    @endisset -->

    <!-- <section class="bg-gray-50 py-24">
        <h2 class="w-full my-2 text-4xl font-black leading-tight text-center text-gray-800">
            Why Us
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto bg-primary w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="max-w-7xl px-6 mx-auto flex">
            <p class="text-xl mt-4 mx-auto text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis eaque necessitatibus voluptate molestiae in facere iusto nobis officiis possimus, sint atque quam obcaecati consectetur similique quis, tempore perferendis! Nulla, architecto.
            </p>
        </div>
    </section> -->
  </div>
</template>

<script>
// import ShowAllProducts from '../components/Products/ShowAllProducts.vue';
import GammeProduct from '../components/Products/GammeProduct.vue'
import SingleProduct from '../components/Products/SingleProduct.vue'
import { mapGetters } from 'vuex'

export default {
    name: "Products",

    metaInfo () {
        return { title: 'Products' }
    },

    components: {
      GammeProduct,
      SingleProduct
    },

    computed: mapGetters({
        gammes: 'cart/allGammes',
        products: 'cart/allProducts',
        // lengthGammes: 'cart/getNumberOfGammes',
        // lengthProducts: 'cart/getNumberOfProducts'
    }),
    // methods: {
    //     ...mapActions('cart',{
    //         addToCart: 'addToCart',
    //     }),
    // }
}
</script>