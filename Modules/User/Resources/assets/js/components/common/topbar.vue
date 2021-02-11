<template>
<v-app-bar app clipped-right flat height="72">
    <v-app-bar-nav-icon :hidden="isMobile" @click="clickMe"></v-app-bar-nav-icon>
    <!-- <v-toolbar-title>Collapsing Bar</v-toolbar-title> -->
    <!-- <v-divider class="my-0 mx-2" vertical></v-divider> -->

    <v-responsive max-width="156">
        <v-text-field dense flat hide-details rounded solo-inverted></v-text-field>
    </v-responsive>

    <v-spacer></v-spacer>
    <router-link to="/user"><v-btn text>Home</v-btn></router-link>
    <router-link to="/user/about"><v-btn text>About</v-btn></router-link>
    <router-link to="/user/contact"><v-btn text>Contact</v-btn></router-link>
    <router-link to="/logout"><v-btn text>Logout</v-btn></router-link>
    <!-- <v-spacer></v-spacer> -->
</v-app-bar>
</template>

<script>
export default {
    data(){
        return{
            drawer: true
        }
    },
    methods:{
        clickMe(){
            this.drawer = !this.drawer;
            this.$emit('toggle', this.drawer);
        }
    },
    computed:{
        isMobile: function(){
            return (
                this.$vuetify.breakpoint.name === "md" ||
                this.$vuetify.breakpoint.name === "sm" ||
                this.$vuetify.breakpoint.name === "xs"
            )? true : false;
        }
    }
}
</script>

<style>

</style>
