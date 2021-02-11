<template>
<div class="container">
    <h1>{{page}} Page</h1>
</div>
</template>
<script>
export default {
    props: ['name'],
    data() {
        return {
            page: 'Home',
            required: true,
        };
    },
    metaInfo: {
      title: 'Home',
      titleTemplate: '%s - Yay!',
      htmlAttrs: {
        lang: 'en',
        amp: true
      }
    }
}
</script>
