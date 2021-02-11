import Vue from 'vue';
import VueRouter from 'vue-router';
import VueMeta from 'vue-meta';
import App from './components/App.vue';
import router from './router.js';

Vue.use(VueRouter);
Vue.use(VueMeta);

new Vue({
    el: "#app",
    router: router,
    components: {
        'my-app': App
    }
});
