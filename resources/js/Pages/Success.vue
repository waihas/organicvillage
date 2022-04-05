<template>
    <div class="min-h-screen">
      <section class="flex items-center text-primary pt-20 pb-12">
         <div class="container mx-auto p-4 flex flex-wrap items-center">
            <!-- @if (Session::has('successOrder')) -->
            <div class="w-full md:w-7/12 text-center md:text-left p-4">
               <div class="font-bold text-4xl md:text-5xl max-w-xl text-gray-900 leading-tight">
                  Order Placed Successfully!
               </div>
               <hr class=" w-12 h-1 bg-primary rounded-full my-8">
               <p class="text-gray-800 text-base leading-relaxed my-8 font-semibold">
                     <!-- {{ Session::get('successOrder') }} -->
                     Your order {{orderId}} is successfully registered, Thank you for your purchase.
               </p>
               <router-link :to="{name: 'products'}" class="bg-primary-dark text-white rounded p-4">Go Shopping</router-link>
            </div>
            <div class="w-full md:w-5/12 text-center p-4">
               <img class="w-full mx-auto" src="/img/successful-purchase.svg" alt="Order completed">
            </div>
            <!-- @endif -->
         </div>
      </section>
        <!-- <section class="bg-primary p-4 py-8 md:px-0">
            <h2 class="w-full my-2 text-4xl font-black leading-tight text-center text-white">
                Products you may like
            </h2>
            <div class="w-full mb-8">
                <div class="h-1 mx-auto bg-white w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-8 max-w-7xl mx-auto">
                @foreach ($bestseller->products as $product)
                @include('main.partials.card.product', ['product' => $product, 'color_bg' => 'bg-black'])
                @endforeach
            </div>
        </section> -->
   </div>
</template>

<script>
// import OrderSuccess from '../components/Success/OrderSuccess.vue';

export default {
    name: "Success",

    metaInfo () {
        return { title: 'Order successfully' }
    },

    props: ['orderId']
    
    // components: { OrderSuccess },
}
</script>