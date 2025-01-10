<script>
export default {
    data() {
        return {
            isExpanded: false,
        };
    },
    methods: {},
};
</script>

<template>
    <v-navigation-drawer floating permanent class="p-4 position-relative" :width="240">
        <div class="flex flex-col gap-y-1">
            <router-link to="/" v-slot="{ isActive }">
                <v-btn block prepend-icon="bi-house" variant="text" class="text-none justify-start" :class="isActive && 'v-btn--active text-surface-light'">
                    Домой
                </v-btn>
            </router-link>
        </div>
    </v-navigation-drawer>
</template>

<style scoped>
</style>
