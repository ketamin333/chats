import { createRouter, createWebHistory } from 'vue-router';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/login',
            component: () => import('../views/components/Pages/Guest/Login.vue'),
            meta: {
                title: 'Авторизация'
            },
        },
        {
            path: '/:pathMatch(.*)*',
            name: 'NotFound',
            component: () => import('../views/components/Common/NotFound.vue'),
            meta: {
                title: 'Страница не сущестует'
            },
        },
        {
            path: '/chats',
            name: 'page',
            component: () => import('../views/components/Pages/App/Home.vue'),
            meta: {
                title: 'Чаты'
            },
            children: [
                {
                    path: ':chatId',
                    components: {
                        chat: () => import('../views/components/Pages/App/Chat.vue')
                    }
                }
            ],
        },
    ],
});

router.beforeEach((to, from) => {
    document.title = to.meta.title + ' | Chats';
});

export { router };
