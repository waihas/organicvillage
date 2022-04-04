<template>
  <button
    :type="nativeType"
    :disabled="loading"
    class="bg-main-500 text-white font-bold py-2 px-4 rounded w-full transition-all duration-100 ease-in-out"
    :class="!loading ? 'hover:bg-main-700' : 'opacity-75 cursor-default' "
  >
    <slot v-if="!loading" />
    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
      v-if="loading"
      width="24" height="24" class="animate-spin mx-auto" fill="currentColor"
      viewBox="0 0 24 24">
      <path d="M13,3.233L13,3.233c0,0.454,0.302,0.867,0.745,0.966c3.711,0.829,6.46,4.238,6.243,8.242 c-0.221,4.086-3.662,7.437-7.752,7.555C7.718,20.127,4,16.49,4,12c0-3.807,2.675-6.996,6.243-7.798C10.69,4.101,11,3.693,11,3.235 V3.234c0-0.64-0.595-1.126-1.219-0.985C5.151,3.302,1.732,7.576,2.017,12.58c0.289,5.093,4.568,9.256,9.666,9.415 C17.341,22.171,22,17.619,22,12c0-4.753-3.334-8.741-7.785-9.752C13.593,2.107,13,2.595,13,3.233z"></path>
    </svg>
    <!-- <fa v-if="loading" :icon="['fas', 'circle-notch']" class="fa-spin" /> -->
  </button>
</template>

<script>
export default {
  name: 'VButton',

  props: {
    type: {
      type: String,
      default: 'primary'
    },

    nativeType: {
      type: String,
      default: 'submit'
    },

    loading: {
      type: Boolean,
      default: false
    },

    block: {
      type: Boolean,
      default: false
    },

    large: {
      type: Boolean,
      default: false
    }
  }
}
</script>
