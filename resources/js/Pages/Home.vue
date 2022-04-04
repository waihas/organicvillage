<template>
    <div>
        <!-- <h1>
            {{ count }}
        </h1>
        <button class="btn" @click="$store.commit('INCREMENT')">INCREMENT</button> -->

        <hero></hero>

        <!-- <section class="md:p-4 md:px-0 bg-pestach-full">
            <h2 class="w-full my-2 text-2xl md:text-4xl font-semibold text-center text-black">
                What we offer you
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto bg-primary w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <div class="max-w-7xl mx-auto relative">
                <div class="flex flex-wrap -mx-1 lg:-mx-4 justify-between">
                    <div
                        class="bg-pestach-card mx-auto my-1 px-6 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4 flex flex-col justify-center items-center cursor-pointer transform hover:scale-105 duration-500"
                        data-aos="zoom-in" data-aos-duration="1000" data-aos-once="false">
                        <div style="background-image: url('/img/nutrition.png')"
                            class="bg-gray-300 h-96 w-full rounded shadow-md bg-cover bg-center">
                        </div>
                        <p class="w-2/3 text-center text-2xl py-2 bg-white text-dark -mt-6 mb-3 font-bold">Nutrition</p>
                    </div>
                    <div
                        class="bg-pestach-card mx-auto my-1 px-6 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4 flex flex-col justify-center items-center cursor-pointer transform hover:scale-105 duration-500"
                        data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300" data-aos-once="false">
                        <div style="background-image: url('/img/cosmetique.jpg')"
                            class="bg-gray-300 h-96 w-full rounded shadow-md bg-cover bg-center">
                        </div>
                        <p class="w-2/3 text-center text-2xl py-2 bg-white text-dark -mt-6 mb-3 font-bold">Cosmétique</p>
                    </div>
                    <div
                        class="bg-pestach-card mx-auto my-1 px-6 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4 flex flex-col justify-center items-center cursor-pointer transform hover:scale-105 duration-500"
                        data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600" data-aos-once="false">
                        <div style="background-image: url('/img/artisanat.jpg')"
                            class="bg-gray-300 h-96 w-full rounded shadow-md bg-cover bg-center">
                        </div>
                        <p class="w-2/3 text-center text-2xl py-2 bg-white text-dark -mt-6 mb-3 font-bold">Artisanat</p>
                    </div>
                </div>
            </div>
        </section> -->

        <why-us></why-us>

    </div>
</template>

<script>
import WhyUs from '../components/Home/WhyUs.vue';
import Hero from '../components/Home/Hero.vue';

export default {
    name: 'Home',

    components: { 
        WhyUs,
        Hero
    },

    metaInfo () {
        return { title: 'Cosmetics naturels et BIO products and packs for your beauty' }
    },

    data: () => ({
        title: window.config.appName,
    }),
}
</script>