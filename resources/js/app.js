import { createApp } from 'vue';
import { vuetify } from './vuetify.js';
import { router }  from './router.js';
import store from './store';

import app from '../views/components/Common/App.vue';

// Создаем экземпляр приложения Vue
const vue = createApp({
    components: {
        app,
    },
});

// Подключаем роутер к приложению
vue.use(router).use(vuetify).use(store);

// Монтируем приложение
vue.mount('#chats');
