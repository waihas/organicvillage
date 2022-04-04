<template>
    <section class="bg-white py-16">
        <!-- <img src="/img/main-logo-circle.svg"
            class="w-48 h-48 mx-auto"
            alt="Logo Organic Village"
            data-aos="zoom-in" data-aos-duration="1000" data-aos-once="false"> -->
        <h2 class="w-full my-2 mt-8 text-6xl font-black leading-tight text-center text-gray-800">
            Why Us ?
        </h2>
        <div class="max-w-7xl flex flex-col px-6 mx-auto">
            <p class="text-xl mt-4 mx-auto text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                <br>
                Lorem ipsum dolor sit amet, consectetur a
            </p>
            <div class="mt-12">
                <img class="w-full h-80 mx-auto bg-primary p-2" 
                    src="https://picsum.photos/200/300"
                    loading="lazy">
            </div>

            <CTA></CTA>

            <p class="mb-4 text-xl mx-auto text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                <br>
                Lorem ipsum dolor sit amet, consectetur a
            </p>
             <div class="mt-12 mb-4">
                <img class="w-full h-80 mx-auto bg-primary p-2" 
                    src="https://picsum.photos/200/300"
                    loading="lazy">
            </div>

            <CTA></CTA>

        </div>
    </section>
</template>

<script>
import CTA from "../CTA.vue"

export default {
    name: "WhyUs",

    components: {
        CTA
    }
}
</script>