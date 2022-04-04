<template>
  <div>
    <navbar></navbar>

    <child class="pt-14" />

    <footer-home></footer-home>
  </div>
</template>

<script>
import Navbar from '~/components/Navbar'
import FooterHome from '~/components/Footer'

export default {
  name: 'MainLayout',

  components: {
    Navbar,
    FooterHome
  }
}
</script>