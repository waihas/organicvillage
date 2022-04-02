<template>
  <div id="header" class="fixed w-full z-30 top-0 text-white bg-primary-gray">
    <div class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8" x-cloak>
        <div>
          <router-link :to="{ name: 'checkout' }">Contact us</router-link>
        </div>
        <!-- <button @click="open = !open" class="flex flex-row text-white items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-white hover:bg-primary focus:text-white focus:bg-secondary focus:outline-none focus:shadow-outline hover:shadow-lg">
                    <span>Cosmétique</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button> -->
        <div class="md:px-4 flex flex-row items-center justify-between">
            <button class="md:hidden ml-2 rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" transform="scale(-1,1) translate(-24,0)" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <router-link :to="{ name: 'home' }">
                <img id="toggleColour" src="/img/main-logo.svg"
                    class="w-24 py-1" alt="Organic Village Logo">
            </router-link>
            <div class="items-center">
                <button slot="icon" class="relative mx-2 md:hidden" @click="cartOpen = !cartOpen">
                    <!-- @livewire('cart-items-count') -->
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
        <!-- <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-center md:flex-row" id="nav-content">
            <a class="toggleText px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-white focus:text-white hover:bg-primary focus:bg-secondary focus:outline-none focus:shadow-outline hover:shadow-lg"
                href="/section.nutrition">Nutrition</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }" x-cloak>
                <button @click="open = !open" class="flex flex-row text-white items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-white hover:bg-primary focus:text-white focus:bg-secondary focus:outline-none focus:shadow-outline hover:shadow-lg">
                    <span>Cosmétique</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full md:w-80 mt-2 origin-top-right">
                    <div class="px-2 pt-2 pb-4 bg-white rounded-md text-gray-800 shadow-lg">
                        <div class="grid grid-cols-1 gap-4">
                            <a class="flex row rounded-lg bg-transparent p-2 hover:text-gray-900 focus:text-white items-center hover:bg-gray-200 focus:bg-secondary focus:outline-none focus:shadow-outline"
                                href="/category.show">
                                <div class="bg-primary text-white rounded-lg p-2">
                                    <img src="/images/corps"
                                        class="md:h-8 md:w-8 h-6 w-6 hidden md:block"
                                        alt="Corps"
                                        loading="lazy">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-semibold">Name</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div> 
            <a class="toggleText px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-white focus:text-white hover:bg-primary focus:bg-secondary focus:outline-none focus:shadow-outline hover:shadow-lg"
                href="/section.artisanat">Artisanat</a>
        </nav> -->
        <div class="px-4 md:w-24 flex flex-row items-center justify-center">
            <button slot="icon" class="relative hidden md:block" @click="cartOpen = !cartOpen">
                <!-- @livewire('cart-items-count') -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current text-white" viewBox="0 0 24 24">
                  <path d="M4.558 7l4.701-4.702c.199-.198.46-.298.721-.298.613 0 1.02.505 1.02 1.029 0 .25-.092.504-.299.711l-3.26 3.26h-2.883zm12.001 0h2.883l-4.701-4.702c-.199-.198-.46-.298-.721-.298-.613 0-1.02.505-1.02 1.029 0 .25.092.504.299.711l3.26 3.26zm3.703 4l-.016.041-3.598 8.959h-9.296l-3.597-8.961-.016-.039h16.523zm3.738-2h-24v2h.643c.534 0 1.021.304 1.256.784l4.101 10.216h12l4.102-10.214c.233-.481.722-.786 1.256-.786h.642v-2z"/>
                </svg>
                <!-- <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> -->
            </button>
        </div>
    </div>
  </div>

  <!-- <div class="w-screen flex flex-row items-center p-1 justify-between bg-white shadow-xs">
    <div class="ml-8 text-lg text-gray-700 hidden md:flex">My Website</div>
    <span class="w-screen md:w-1/3 h-10 bg-gray-200 cursor-pointer border border-gray-300 text-sm rounded-full flex">
      <input type="search" name="serch" placeholder="Search"
        class="flex-grow px-4 rounded-l-full rounded-r-full text-sm focus:outline-none">
      <i class="fas fa-search m-3 mr-5 text-lg text-gray-700 w-4 h-4">
      </i>
    </span>
    <div class="flex flex-row-reverse mr-4 ml-4 md:hidden">
      <i class="fas fa-bars"></i>
    </div >
      <div class="flex flex-row-reverse mr-8 hidden md:flex">
        <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">Button</div>
        <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">Link</div>
      </div>
  </div> -->
  <!-- <nav class="navBar">
    <ul class="navBar__link">
      <li><router-link :to="{ name: 'home' }">Home</router-link></li>
      <li><router-link :to="{ name: 'products' }">Products</router-link> </li>
      <li><router-link :to="{ name: 'checkout' }">Checkout</router-link> </li>
    </ul>
  </nav> -->
</template>

<script>
export default {
  name: 'navbar'
}
</script>