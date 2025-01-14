import { createRouter, createWebHistory } from 'vue-router';

const router = createRouter({
    history: createWebHistory(),
    routes: [
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
        {
            path: '/test',
            component: ()=> import('../views/components/Pages/App/Test.vue')
        }
    ],
});

router.beforeEach((to, from) => {
    document.title = to.meta.title + ' | Chats';
});

export { router };
