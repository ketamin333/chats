<script>
import {mapActions, mapState} from 'vuex'; // Импортируем функции для связывания

export default {
    data: () => ({
        elements: [
            {
                title: 'Домой',
                icon: 'bi-house',
                link: '/',
            },
            {
                title: 'Чаты',
                icon: 'mdi-forum',
                link: '/chats',
            },
            {
                title: 'Папка ',
                icon: 'mdi-folder-outline',
                link: '/folder',
            },
        ],
    }),
    computed: {
        ...mapState(['showSidebar']),
    },
    methods: {
        ...mapActions(['toggleSidebar']),
    },
}

</script>

<template>
    <v-navigation-drawer floating color="background" width="96" class="px-4">
        <v-list lines="one" class="!flex flex-col !gap-y-6 !pt-28">
            <router-link
                v-for="element in elements"
                :to="element.link"
                v-slot="{ isActive }">
                <v-list-item
                    :active="isActive"
                    active-class="on-primary"
                    class="!p-0"
                    style="--v-activated-opacity: 0">
                    <v-list-item-title class="flex flex-col gap-2 align-center">
                        <v-icon :icon="element.icon"></v-icon>
                        <span class="text-xs" v-text="element.title"></span>
                    </v-list-item-title>
                </v-list-item>
            </router-link>
        </v-list>
        <v-divider class="mx-2 my-4" thickness="2"></v-divider>
    </v-navigation-drawer>

    <!--<v-main class="overflow-y-auto h-full">
        <v-container fluid class="h-full bg-surface rounded-s-3xl shadow-2xl pt-12 pb-0 px-0" :class="showSidebar ? 'rounded-e-3xl' : ''">
            <router-view></router-view>
        </v-container>
    </v-main>

    <v-navigation-drawer floating color="background" width="350" class="px-4 pt-12" location="right" v-if="showSidebar">
        <div class="flex flex-column gap-y-6 on-primary">
            <div class="flex justify-space-between">
                <div class="text-base font-bold">Информация</div>
                <v-icon icon="bi-x" @click="toggleSidebar"></v-icon>
            </div>
        </div>
        <template v-slot:append>

        </template>
    </v-navigation-drawer>-->
</template>

<style scoped>

</style>
