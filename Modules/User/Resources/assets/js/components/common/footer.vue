<template>
<v-footer color="blue" padless app height="36px">
    <v-row>
      <v-col class="blue py-1 text-center white--text" cols="12">
        {{ new Date().getFullYear() }} — Developed By <strong>Medust Technology Pvt. Ltd.</strong>
      </v-col>
    </v-row>
  </v-footer>
</template>

<script>
import SystemBar from './systembar';
export default {
    data: () => ({
      icons: [
        'mdi-facebook',
        'mdi-twitter',
        'mdi-linkedin',
        'mdi-instagram',
      ],
      links: [
        'Home',
        'About Us',
        'Team',
        'Services',
        'Blog',
        'Contact Us',
      ],
    }),
    components: {
        SystemBar
    }
}
</script>

<style>

</style>
