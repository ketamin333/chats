<script setup>
    import { useTheme } from 'vuetify'

    const theme = useTheme();
    let isDark = theme.global.current.value.dark;

    function toggleTheme() {
        theme.global.name.value = isDark ? 'chatsLightTheme' : 'chatsDarkTheme';
        isDark = theme.global.current.value.dark;
    }
</script>

<template>
    <v-navigation-drawer floating permanent class="p-4 position-relative" :width="72" location="right">
        <div class="flex flex-col gap-y-5">
            <router-link to="/me">
                <v-avatar size="40" class="border">
                    <v-img
                        alt="user"
                        src="https://shapka-youtube.ru/wp-content/uploads/2024/08/neonovaya-avatarka-krolika.jpg"></v-img>
                    <v-tooltip
                        content-class="border bg-surface shadow-lg text-caption text-surface-light"
                        activator="parent"
                        location="start"
                    >Профиль</v-tooltip>
                </v-avatar>
            </router-link>
            <div class="flex flex-col gap-y-3">
                <v-btn icon="bi bi-bell" size="small" variant="text">
                    <v-icon icon="bi bi-bell"></v-icon>
                    <v-tooltip
                        content-class="border bg-surface shadow-lg text-caption text-surface-light"
                        activator="parent"
                        location="start"
                    >Уведомления</v-tooltip>
                </v-btn>
                <v-btn size="small" variant="text" @click="toggleTheme" :icon="isDark ? 'bi bi-brightness-high' : 'bi bi-moon-stars'">
                    <v-icon :icon="isDark ? 'bi bi-brightness-high' : 'bi bi-moon-stars'"></v-icon>
                    <v-tooltip
                        content-class="border bg-surface shadow-lg text-caption text-surface-light"
                        activator="parent"
                        location="start"
                        :text="isDark ? 'Светлая тема' : 'Темная тема'"></v-tooltip>
                </v-btn>
            </div>
        </div>
    </v-navigation-drawer>
</template>

<style scoped>
</style>
