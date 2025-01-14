<script setup>
    const items = [
        {
            title: 'Домой',
            icon: 'bi-house',
            link: '/chats',
        },
    ];
</script>

<template>
    <v-navigation-drawer floating class="p-4" :width="240">
        <v-list lines="one" class="!p-0">
            <router-link
                v-for="item in items"
                v-slot="{ isActive }"
                :to="item.link">
                <v-list-item
                    :active="isActive"
                    rounded="lg" class="!p-3"
                    color="surface-light">
                    <v-list-item-title class="flex gap-x-2">
                        <v-icon :icon="item.icon"></v-icon>
                        <span v-text="item.title"></span>
                    </v-list-item-title>
                </v-list-item>
            </router-link>
        </v-list>
    </v-navigation-drawer>
</template>

<style scoped>
</style>
