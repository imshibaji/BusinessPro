<template>
<div>
    <Header />
    <router-view></router-view>
</div>

</template>

<script>
import Header from './common/header';
import Home from './pages/home';
export default {
    components:{
        Header,
        Home
    }
}
</script>

<style>

</style>
