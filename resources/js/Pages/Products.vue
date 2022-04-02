<template>
  <div>
    <section class="flex flex-col justify-center p-8 mb-10 bg-white">
        <nav class="w-full py-4">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
                <h3 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-700 text-xl " href="#">
                    Nos gammmes
                </h3>
            </div>
        </nav>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-8 pt-8 max-w-7xl mx-auto">
            <!-- @foreach ($section->gammes as $gamme) -->
                <!-- @include('main.partials.card.gamme', ['gamme' => $gamme]) -->
              <div v-for="index in 3" :key="index">
                <gamme-product></gamme-product>
              </div>
            <!-- @endforeach -->
        </div>
        <nav class="w-full py-4 mt-8">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
                <h3 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-700 text-xl " href="#">
                    Nos produits
                </h3>
            </div>
        </nav>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-8 pt-8 max-w-7xl mx-auto">
            <!-- @foreach ($section->products as $product) -->
            <div v-for="index in 6" :key="index">
                <single-product></single-product>
            </div>
                <!-- @include('main.partials.card.product', ['product' => $product, 'color_bg' => 'bg-primary-dark']) -->
            <!-- @endforeach -->
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

    <section class="bg-gray-50 py-24">
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
    </section>
  </div>
  <!-- <show-all-products /> -->
  <!-- <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">About</div>
            <div class="flex justify-center mt-24">
                <h1 class="text-2xl font-bold text-gray-700">Organic Village</h1>
            </div>
          <div class="card-body">About Page</div>
        </div>
      </div>
    </div>
  </div> -->
</template>

<script>
// import ShowAllProducts from '../components/Products/ShowAllProducts.vue';
import GammeProduct from '../components/Products/GammeProduct.vue'
import SingleProduct from '../components/Products/SingleProduct.vue'

export default {
    name: "Products",

    components: {
      GammeProduct,
      SingleProduct
    }
}
</script>