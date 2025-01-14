import { createApp } from 'vue';
import { vuetify } from './vuetify.js';
import { router }  from './router.js';

// // import AuthPanel from "./components/home/AuthPanel.vue";
// // import FooterPanel from "./components/home/FooterPanel.vue";
// // import RegisterContainer from "./components/Auth/RegisterContainer.vue";

import navbar from '../views/components/Common/MenuNavbar.vue';
import sidebar from '../views/components/Common/Sidebar.vue';

// Создаем экземпляр приложения Vue
const app = createApp({
    components: {
        navbar,
        sidebar,
    },
});

// Подключаем роутер к приложению
app.use(router)
    .use(vuetify);

// Монтируем приложение
app.mount('#chats');
