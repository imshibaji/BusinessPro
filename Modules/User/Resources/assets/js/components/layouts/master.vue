<template>
<v-app id="inspire">
    <SystemBar />
    <Topbar v-on:toggle="showHide" />
    <Sidebar v-bind:drawer="drawer" :mini="mini" />

    <v-main>
      <slot></slot>
    </v-main>

   <Footer />
</v-app>
</template>

<script>
import Topbar from '../common/topbar';
import Sidebar from '../common/sidebar';
import Footer from '../common/footer';
import SystemBar from '../common/systembar';
export default {
    data: () => ({
        drawer: true,
        mini: false,
    }),
    components:{
        Topbar,
        Sidebar,
        Footer,
        SystemBar
    },
    methods:{
        showHide(data){
            this.drawer = data;
            this.mini = !this.mini;
            console.log(data);
        }
    }
}
</script>

<style>

</style>
