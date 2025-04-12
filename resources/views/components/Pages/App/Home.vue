<script>
import { mapState, mapActions } from 'vuex'; // Импортируем функции для связывания
import axios from 'axios';

export default {
    data: () => ({
        clients: [
            {
                clientId: 1,
                avatar: 'https://pm1.aminoapps.com/6858/1cbe6e91ddd50998765fd3b8af391a21b1e3f579v2_hq.jpg',
                clientName: 'Sasha',
                isRead: true,
                time: (new Date()).toLocaleTimeString('ru', {
                    day: '2-digit',
                    month: '2-digit',
                    year: '2-digit',
                }),
                text: 'Привет'
            },
            {
                clientId: 2,
                avatar: 'https://coolsen.ru/wp-content/uploads/2021/12/290-20211222_191746-455x600.jpg',
                clientName: 'Test',
                isRead: false,
                time: (new Date()).toLocaleTimeString('ru', {
                    day: '2-digit',
                    month: '2-digit',
                    year: '2-digit',
                }),
                text: 'Привет я рад знакомству!'
            }
        ],
        chat: {
            avatar: 'https://pm1.aminoapps.com/6858/1cbe6e91ddd50998765fd3b8af391a21b1e3f579v2_hq.jpg',
            chatName: 'Sasha',
            subtitle: '25 online'
        },
    }),
    computed: {
        ...mapState(['showSidebar']),
    },
    methods: {
        ...mapActions(['toggleSidebar']),
    },
    // mounted() {
    //     axios
    //         .get('/api/app/clients')
    //         .then(response => (this.clients = response.data));
    // }
}

</script>

<template>
    <v-card class="!rounded-xl h-full" elevation="0">
        <v-row no-gutters class="h-full">
            <v-col cols="3" class="h-full flex flex-col gap-y-8 px-6">
                <div class="px-6">
                    <v-text-field
                        placeholder="Поиск"
                        rounded="lg"
                        bg-color="surface-light"
                        hide-details
                        prepend-inner-icon="bi-search !text-base"
                        variant="solo-filled"></v-text-field>
                </div>
                <v-list
                    lines="two" class="!p-0">
                    <router-link
                        v-for="client in clients"
                        :to="{path: `/chats/${client.clientId}`}"
                        v-slot="{ isActive }">
                        <v-list-item
                            :active="isActive"
                            active-class="bg-surface-light"
                            rounded="lg"
                            class="!p-4"
                            style="--v-activated-opacity: 0"
                            :prepend-avatar="client.avatar">
                            <v-list-item-title class="flex justify-between align-center">
                                <div class="font-bold truncate text-base" v-text="client.clientName"></div>
                                <div class="text-[0.75rem] flex gap-x-1">
                                    <v-icon :icon="client.isRead ? 'bi-check-all' : 'bi-check'" class="text-primary"></v-icon>
                                    <div v-text="client.time"></div>
                                </div>
                            </v-list-item-title>
                            <v-list-item-subtitle class="text-sm mt-2" v-text="client.text"></v-list-item-subtitle>
                        </v-list-item>
                    </router-link>
                </v-list>
<!--                <div>-->
<!--                    <div class="px-2 py-2">-->
<!--                        <v-text-field-->
<!--                            prepend-inner-icon="bi-search text-primary !text-base"-->
<!--                            variant="outlined"-->
<!--                            density="compact"-->
<!--                            label="Поиск"-->
<!--                            hide-details-->
<!--                            clearable-->
<!--                            clear-icon="bi-x text-primary"-->
<!--                        ></v-text-field>-->
<!--                    </div>-->
<!--                    <v-tabs height="40" color="primary">-->
<!--                        <v-tab value="all" class="text-none !text-sm rounded-t-lg font-weight-bold">Все чаты</v-tab>-->
<!--                    </v-tabs>-->
<!--                </div>-->
<!--                <v-list lines="one" class="!p-2 border-t h-full overflow-y-auto">-->
<!--                    <v-list-item-->
<!--                        v-for="item in clients" :value="item"-->
<!--                        :prepend-avatar="item.avatar"-->
<!--                        rounded="lg" class="!p-3 "-->
<!--                        color="primary">-->
<!--                        <router-link :to="{path: `/chats/${item.client_id}`}">-->
<!--                            <v-list-item-title class="flex justify-between align-center">-->
<!--                                <div class="font-bold truncate text-base" v-text="item.client_name"></div>-->
<!--                                <div class="text-[0.75rem] flex gap-x-1">-->
<!--                                    <v-icon :icon="item.is_read ? 'bi-check-all' : 'bi-check'" class="text-primary"></v-icon>-->
<!--                                    <div v-text="item.created_at"></div>-->
<!--                                </div>-->
<!--                            </v-list-item-title>-->
<!--                            <v-list-item-subtitle v-text="item.text" class="text-sm"></v-list-item-subtitle>-->
<!--                        </router-link>-->
<!--                    </v-list-item>-->
<!--                </v-list>-->
            </v-col>
            <v-col class="h-full flex flex-column px-6">
                <v-list-item
                    class="!p-0"
                    density="compact"
                    :prepend-avatar="chat.avatar"
                    rounded="lg">

                    <v-list-item-title class="flex justify-between align-center">
                        <div class="font-bold truncate text-base" v-text="chat.chatName"></div>
                    </v-list-item-title>
                    <v-list-item-subtitle v-text="chat.subtitle" class="!text-xs mt-2"></v-list-item-subtitle>

                    <template v-slot:append class="flex gap-x-2">
                        <v-btn icon="bi-search"
                               variant="text"
                               size="small"></v-btn>
                        <v-btn icon="bi-layout-split"
                               variant="text"
                               @click="toggleSidebar"
                               size="small"></v-btn>
                        <v-btn icon="bi-three-dots-vertical"
                               variant="text"
                               size="small"></v-btn>
                    </template>
                </v-list-item>
<!--                <router-view name="chat" />-->
            </v-col>
        </v-row>
    </v-card>
</template>

<style>
    .v-field--variant-solo-filled .v-field__overlay {
        opacity: 0 !important;
    }

    .v-field--variant-solo, .v-field--variant-solo-filled {
        box-shadow: none !important;
    }

    .v-avatar.v-avatar--size-default {
        --v-avatar-height: 48px !important;
    }
</style>
