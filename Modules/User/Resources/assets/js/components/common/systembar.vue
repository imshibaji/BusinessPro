<template>
<v-system-bar color="blue" dark app height="30">
    <h4 class="text-white">Mr. Business Pro</h4>
    <v-spacer></v-spacer>
    <v-btn text>
        <v-icon>mdi-message</v-icon>
        10 Messagee
    </v-btn>
    <v-icon @click="$emit('mini', 'mini')">mdi-square</v-icon>
    <v-icon @click="$emit('max', 'max')">mdi-circle</v-icon>
    <v-icon @click="$emit('logout', 'logout')">mdi-logout</v-icon>
</v-system-bar>
</template>

<script>
export default {

}
</script>

<style>

</style>
