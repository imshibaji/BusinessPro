import VueRouter from 'vue-router';
import Home from './components/pages/home.vue';
import About from './components/pages/about.vue';
import Contact from './components/pages/contact.vue';


const router = new VueRouter({
    mode: 'history',
    routes:[
        {path: '/user/', component: Home, name: 'home'},
        {path: '/user/about', component: About, name: 'about'},
        {path: '/user/contact', component: Contact, name: 'contact'},
    ] // short for `routes: routes`
});

export default router;
