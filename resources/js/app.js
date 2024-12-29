import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/components/Pages/App/Home.vue';
import SidebarMenu from '../views/components/Common/SidebarMenu.vue';
// import AuthPanel from "./components/home/AuthPanel.vue";
// import FooterPanel from "./components/home/FooterPanel.vue";
// import RegisterContainer from "./components/Auth/RegisterContainer.vue";

const routes = [
    {
        path: '/', component: Home
    },
];

// Создаем экземпляр роутера с историей
const router = createRouter({
    history: createWebHistory(),
    routes,
});

// Создаем экземпляр приложения Vue
const app = createApp({
    components: {
        SidebarMenu,
    },
});

// Подключаем роутер к приложению
app.use(router);

// Монтируем приложение
app.mount('#app');
