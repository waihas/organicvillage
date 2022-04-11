<template>
    <div class="p-2 md:p-4">
        <form @submit.prevent="addCoupon" @keydown="form.onKeydown($event)" class="flex items-center justify-center">
            <input v-model="form.coupon"
                class="w-full bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-primary-default"
                :class="{ 'border-red-500': form.errors.has('coupon') }"
                type="text" placeholder="Add Coupon">
            <button type="submit"
                :disabled="form.busy"
                class="ml-3 flex items-center px-3 py-2 bg-primary-dark text-white text-sm uppercase font-medium rounded hover:bg-primary focus:outline-none focus:bg-gray-800">
                <span v-if="!form.busy">
                    Apply
                </span>
                <span v-else>
                    <div class="animate-spin rounded-full h-6 w-6 border-t-2 border-b-2 border-white"></div>
                </span>
            </button>
        </form>
        <has-error class="mt-2 text-sm text-red-600" :form="form" field="coupon" />
        <p v-if="fail" class="mt-2 text-sm text-red-500">Coupon is not valid!</p>
        <p v-if="success" class="mt-2 text-sm text-green-500">Coupon has been applied!</p>
    </div>
</template>

<script>
import Form from 'vform'

export default {
    name: 'Coupon',

     data: () => ({
      form: new Form({
        coupon: '',
      }),
      success: false,
      fail: false,
    }),

    methods: {
        async addCoupon() {
            // Submit the form.
            const { data } = await this.form.post('/api/addCoupon')

            if(data.success) {
                this.success = true
                this.fail = false
            }
            else {
                this.fail = true
                this.success = false
            }

            // Save the token.
            // this.$store.dispatch('auth/saveToken', {
            //   token: data.token,
            //   remember: this.remember
            // })

            // Fetch the user.
            // await this.$store.dispatch('auth/fetchUser')

        }
    }

}
</script>