<template>
    <div class="bg-white shadow-lg cursor-pointer rounded transform hover:scale-105 duration-300 ease-in-out">
        <div class="">
            <img src="https://picsum.photos/200/300"
                alt="Game name"
                class="rounded-t">
        </div>
        <div class="p-4">
            <h2 class="text-xl uppercase">
                Game name
            </h2>
            <!-- <p class="font-light text-gray-500 text-lg my-2">
                {{ $gamme->item->special_price ?? $gamme->item->price }} {{ config('settings.currency_symbol') }}
            </p> -->
            <p class="font-light text-gray-600 my-2">
                <!-- @if($gamme->item->special_price) -->
                <i class="text-gray-500 line-through">430 MAD</i>
                <span class="font-bold">
                    400 MAD
                </span>
                <!-- @else
                <span class="">
                    {{ $gamme->item->price }} {{ config('settings.currency_symbol') }}
                </span>
                @endif -->
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
                <!-- {{ $gamme->item->description }} -->
            </p>
            <div class="flex flex-wrap text-sm mt-3">
                <ul>
                    <!-- @foreach ($gamme->products as $product) -->
                    <li v-for="index in 4" :key="index" class="flex items-center">
                        <div class="rounded-full p-2 fill-current text-green-700">
                            <svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01" ></polyline>
                            </svg>
                        </div>
                        <span class="text-gray-700 text">Product #{{index}} &bull; 500 ml</span>
                    </li>
                    <!-- @endforeach -->
                </ul>
            </div>
            <button type="button"
                class="w-full text-sm md:text-base block bg-primary-default py-2 px-2 text-white text-center md:rounded shadow-lg uppercase font-light mt-6 hover:bg-primary hover:text-white duration-300 ease-in-out">
                Add to cart
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "GammeProduct"
}
</script>