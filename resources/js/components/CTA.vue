<template>
    <div class="w-full flex justify-center py-12">
        <router-link :to="{name: 'products'}" 
            class="bg-primary-dark flex justify-between items-center px-6 py-3 w-1/3 text-white hover:bg-primary-default rounded-sm">
            <span class="text-xl font-medium leading-5 ">Click To Action</span>
            <svg class="" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.66663 16H25.3333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M20 21.3333L25.3333 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M20 10.6667L25.3333 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </router-link>
    </div>
</template>

<script>
export default {
    name: "CTA"
}
</script>