<script>
    // import { useTheme } from 'vuetify';

    export default {
        data: () => ({
            showSidebar: true
        }),
    }

    // export default {
    //     data: () => ({
    //         theme: useTheme(),
    //         isDark: useTheme().global.current.value.dark,
    //         elements: [
    //             {
    //                 icon: 'bi-bell',
    //
    //             }
    //         ],
    //     }),
    //     methods: {
    //         toggleTheme() {
    //             this.theme.global.name.value = this.isDark ? 'chatsLightTheme' : 'chatsDarkTheme';
    //             this.isDark = this.theme.global.current.value.dark;
    //         }
    //     },
    // }
</script>

<template>
    <v-navigation-drawer floating color="background" width="350" class="px-4 pt-12" location="right" >

<!--        <div class="flex flex-column gap-y-6 on-primary">-->
<!--            <div class="flex justify-space-between ">-->
<!--                <div class="text-base font-bold">Информация</div>-->
<!--                <v-icon icon="bi-x"></v-icon>-->
<!--            </div>-->
<!--        </div>-->
    </v-navigation-drawer>
<!--    <v-navigation-drawer floating class="p-4" :width="72" location="right">-->
<!--        <div class="flex flex-col gap-y-5">-->
<!--            <router-link to="/me">-->
<!--                <v-avatar size="40" class="border">-->
<!--                    <v-img alt="user" src="https://avatars.dzeninfra.ru/get-zen_doc/9663006/pub_642a84cd2a95170f8bb81cd4_642a869945699857616ab4cb/scale_1200"></v-img>-->
<!--                    <v-tooltip-->
<!--                        content-class="border bg-surface shadow-lg text-caption text-surface-light"-->
<!--                        activator="parent"-->
<!--                        location="start">Профиль</v-tooltip>-->
<!--                </v-avatar>-->
<!--            </router-link>-->
<!--            <div class="flex flex-col gap-y-3">-->
<!--                <v-btn v-for="element in elements"-->
<!--                       :icon="element.icon"-->
<!--                       size="small" variant="text">-->
<!--                    <v-icon :icon="element.icon"></v-icon>-->
<!--                    <v-tooltip></v-tooltip>-->
<!--                </v-btn>-->

<!--                <v-btn icon="bi bi-bell" size="small" variant="text">-->
<!--                    <v-icon icon="bi bi-bell"></v-icon>-->
<!--                    <v-tooltip-->
<!--                        content-class="border bg-surface shadow-lg text-caption"-->
<!--                        activator="parent"-->
<!--                        location="start"-->
<!--                    >Уведомления</v-tooltip>-->
<!--                </v-btn>-->
<!--                <v-btn size="small" variant="text" @click="toggleTheme" :icon="isDark ? 'bi bi-brightness-high' : 'bi bi-moon-stars'">-->
<!--                    <v-icon :icon="isDark ? 'bi bi-brightness-high' : 'bi bi-moon-stars'"></v-icon>-->
<!--                    <v-tooltip-->
<!--                        content-class="border bg-surface shadow-lg text-caption"-->
<!--                        activator="parent"-->
<!--                        location="start"-->
<!--                        :text="isDark ? 'Светлая тема' : 'Темная тема'"></v-tooltip>-->
<!--                </v-btn>-->
<!--            </div>-->
<!--        </div>-->
<!--    </v-navigation-drawer>-->
</template>

<style scoped>
</style>
