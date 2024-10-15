import { createRouter, createWebHistory } from "vue-router";
import MainView from '../views/Main/MainView.vue';
import CatalogView from "../views/Catalog/CatalogView.vue";

const router = new createRouter({
    base: "/",
    history: createWebHistory(),
    routes: [
        { path: "/", component: MainView },
        { path: "/catalog", component: CatalogView }
    ],
});

export default router;