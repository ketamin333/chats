<script>
import axios from 'axios';

export default {
    data: () => ({
    }),
}

console.log(await axios.get('/api/getClient'));
</script>

<template>
    <v-card variant="tonal" class="!rounded-xl h-full">
        <v-row no-gutters class="h-full">
            <v-col cols="3" class="bg-surface h-full flex flex-column">
                <div>
                    <div class="px-2 py-2">
                        <v-text-field
                            prepend-inner-icon="bi-search text-primary !text-base"
                            variant="outlined"
                            density="compact"
                            label="Поиск"
                            hide-details
                            clearable
                            clear-icon="bi-x text-primary"
                        ></v-text-field>
                    </div>
                    <v-tabs height="40" color="primary">
                        <v-tab value="all" class="text-none !text-sm rounded-t-lg">Все чаты</v-tab>
                        <v-tab value="two" class="text-none !text-sm rounded-t-lg">Рабочие</v-tab>
                        <v-tab value="three" class="text-none !text-sm rounded-t-lg">Другие</v-tab>
                    </v-tabs>
                </div>
<!--                <v-list lines="one" class="!p-2 border-t h-full overflow-y-auto">-->
<!--                    <v-list-item-->
<!--                        v-for="item in items" :value="item"-->
<!--                        :prepend-avatar="item.avatar"-->
<!--                        rounded="lg" class="!p-3 "-->
<!--                        color="primary">-->
<!--                        <router-link :to="{path: `/chats/${item.id}`}">-->
<!--                            <v-list-item-title class="flex justify-between align-center">-->
<!--                                <div class="font-bold truncate text-base" v-text="item.title"></div>-->
<!--                                <div class="text-[12px] flex gap-x-1">-->
<!--                                    <v-icon :icon="item.isRead ? 'bi-check-all' : 'bi-check'" class="text-primary"></v-icon>-->
<!--                                    <div v-text="item.date"></div>-->
<!--                                </div>-->
<!--                            </v-list-item-title>-->
<!--                            <v-list-item-subtitle v-text="item.subtitle" class="text-sm"></v-list-item-subtitle>-->
<!--                        </router-link>-->
<!--                    </v-list-item>-->
<!--                </v-list>-->
            </v-col>
            <v-col class="h-full flex flex-column border-s">
                <router-view name="chat" />
            </v-col>
        </v-row>
    </v-card>
</template>

<style scoped>
</style>
