import { createRouter, createWebHistory } from "vue-router";
import MainView from '../views/Main/MainView.vue';

const router = new createRouter({
    base: "/",
    history: createWebHistory(),
    routes: [
        { path: "/", component: MainView },
    ],
});

export default router;