<template>
    <!-- <section class="bg-white flex flex-col justify-center pt-16 lg:px-8" -->
    <section class="bg-white flex flex-col justify-center"
        style="background-image: url('/img/grass.jpeg'); background-attachment: fixed"
        loading="lazy">
        <!-- <div class="w-11/12 md:max-w-5xl mx-auto pt-8 bg-black bg-opacity-50"> -->
        <div class="w-full pt-8 bg-black bg-opacity-50">
            <div class="w-11/12 md:max-w-5xl mx-auto">
                <div class="flex flex-col text-center w-full mb-16 mt-8">
                    <h2 class="text-xl text-black tracking-widest font-medium title-font mb-1">
                        ROOF PARTY POLAROID
                    </h2>
                    <h1 class="text-3xl sm:text-6xl font-bold title-font my-4 text-white">
                        Join the <span class="text-primary-default">Biggest</span> in the world! right now!
                    </h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-gray-200 text-base">
                        Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.
                    </p>
                </div>
                    <!-- w-full md:w-11/12 -->
                <!-- <div class="w-auto">
                    <iframe class="mx-auto"
                    id="heroVideo"
                    src="https://www.youtube.com/embed/idg9vB90DPY"
                    srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;height:100%}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href='https://www.youtube.com/embed/idg9vB90DPY?autoplay=1'><img src='https://img.youtube.com/vi/idg9vB90DPY/hqdefault.jpg' alt='Watch How it Works'><span>▶</span></a>"
                    frameborder="0" loading="lazy" allowfullscreen
                    allow="autoplay"
                    title="How it works"></iframe>
                </div> -->
                <div class="relative slide">
                    <div class="carousel-indicators absolute bottom-0 flex bg-yellow-100 h-24 w-full justify-center items-center">
                        <ol class="z-50 flex w-4/12 justify-center">
                            <li v-for="(img, i) in images" :key="i" loading="lazy" class="md:w-4 md:h-4 bg-gray-300 rounded-full cursor-pointer mx-2"></li>
                        </ol>
                    </div>
                    <div class="carousel-inner relative overflow-hidden w-full">
                        <div v-for="(img, i) in images" :id="`slide-${i}`" :key="i" :class="`${active === i ? 'active' : 'left-full'}`" class="carousel-item inset-0 relative w-full transform transition-all duration-500 ease-in-out">
                            <img class="block w-full" :src="img" alt="First slide" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="max-w-7xl mx-auto px-6">
                <CTA></CTA>
            </div>

        </div>
    </section>
</template>

<script>
import CTA from '../CTA.vue';

export default {
  name: 'Hero',

  components: {
      CTA
  },

  data() {
    return {
        images: [
            "https://picsum.photos/id/237/1024/800",
            "https://picsum.photos/id/238/1024/800",
            "https://picsum.photos/id/239/1024/800"
        ],
        active: 0
    }
  },

  mounted() {
    let i = 0;
        setInterval(() => {
        if (i > this.images.length - 1) {
            i = 0;
        }
        this.active = i;
        i++;
        }, 2000);
  }

//   methods: {
//     setViewHeight: function() {
//       let vh = window.innerHeight * 0.01
//     //   document.documentElement.style.setProperty('--vh', `${vh}px`)
//       document.getElementById('heroVideo').style.setProperty('--vh', `${vh}px`)
//     //   console.log('vh' + vh)
//     },
//   },
//   mounted: function() {
//     this.setViewHeight()
//     window.addEventListener('resize', () => {
//       this.setViewHeight()
//     })
//   },
};
</script>

<style scoped>
@media only screen and (min-width: 100px) {
    #heroVideo {
        height: 50px !important; /* 1080 */
        width: 90px !important; /* 1920 */
    }
}
@media only screen and (min-width: 200px) {
    #heroVideo {
        height: 100px !important;
        width: 180px !important;
    }
}
@media only screen and (min-width: 300px) {
    #heroVideo {
        height: 150px !important;
        width: 270px !important;
    }
}
@media only screen and (min-width: 400px) {
    #heroVideo {
        height: 200px !important;
        width: 360px !important;
    }
}
@media only screen and (min-width: 500px) {
    #heroVideo {
        height: 250px !important;
        width: 450px !important;
    }
}
@media only screen and (min-width: 600px) {
    #heroVideo {
        height: 310px !important;
        width: 550px !important;
    }
}

@media only screen and (min-width: 700px) {
#heroVideo {
    height: 57vh !important;
    width: 100vh !important;
    /* height: 30em !important; */
    /* background-image: url("../../../img/jpg/Hero.jpg"); */
    /* height: 24rem; */
}
}

.left-full {
  left: -100%;
}

.carousel-item {
  float: left;
  position: relative;
  display: block;
  width: 100%;
  margin-right: -100%;
  backface-visibility: hidden;
}

.carousel-item.active {
  left: 0;
}
</style>
