import { createRouter, createWebHistory } from "vue-router";
import MainView from '../views/Main/MainView.vue';
import CatalogView from "../views/Catalog/CatalogView.vue";
import RegisterView from "../views/Register/RegisterView.vue";
import LoginView from "../views/Login/LoginView.vue";

const router = new createRouter({
    base: "/",
    history: createWebHistory(),
    routes: [
        { path: "/", component: MainView },
        { path: "/catalog", component: CatalogView },
        { path: "/register", component: RegisterView },
        { path: "/login", component: LoginView },
    ],
});

export default router;