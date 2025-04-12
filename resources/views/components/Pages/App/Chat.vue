<script>
import axios from "axios";

export default {
    data: () => ({
        client: null,
        // showMenu: false,
        // x: 0,
        // y: 0,
        // contextMenuElements: [
        //     {
        //         title: 'Изменить',
        //         icon: 'bi-pencil-fill',
        //         color: 'default'
        //     },
        //     {
        //         title: 'Скопировать',
        //         icon: 'bi-copy',
        //         color: 'default'
        //     },
        //     {
        //         title: 'Выбрать',
        //         icon: 'bi-check-circle',
        //         color: 'default'
        //     },
        //     {
        //         title: 'Закрепить',
        //         icon: 'bi-pin',
        //         color: 'default'
        //     },
        //     {
        //         title: 'Удалить',
        //         icon: 'bi-trash3',
        //         color: 'primary'
        //     },
        // ],
    }),
    mounted() {
        axios
            .get(`/api/app/messages/${this.$route.params.chatId}`)
            .then(response => (this.client = response.data))
    },
    // methods: {
    //     messageDate(date) {
    //         return new Date(date).toLocaleString('ru', {
    //             day: 'numeric',
    //             month: 'long',
    //         })
    //     },
    //     show (e) {
    //         e.preventDefault()
    //         this.showMenu = false
    //         this.x = e.clientX
    //         this.y = e.clientY
    //         this.$nextTick(() => {
    //             this.showMenu = true
    //         });
    //     },
    // },
}
</script>

<template>
    <v-list-item
        :prepend-avatar="client.client.avatar"
        rounded="lg" class="!p-3">

        <v-list-item-title class="flex justify-between align-center">
            <div class="font-bold truncate text-base" v-text="client.client.client_name"></div>
        </v-list-item-title>
        <!--        <v-list-item-subtitle v-text="client.client.subtitle" class="text-sm">asd</v-list-item-subtitle>-->

        <template v-slot:append>
            <div class="flex gap-x-2">
                <v-btn icon="bi-three-dots-vertical" variant="text" size="small" title="Еще"></v-btn>
            </div>
        </template>
    </v-list-item>


<!--    <v-container class="h-full overflow-y-auto flex bg-background flex-column-reverse gap-y-4">-->
<!--        <div v-for="(messagesBubble, date) in client.messages">-->
<!--            <div class="flex justify-center mb-4">-->
<!--                <div class="text-sm px-3 py-1 rounded-xl" v-text="messageDate(date)"></div>-->
<!--            </div>-->
<!--            <div class="flex flex-col gap-y-2">-->
<!--                <div v-for="bubble in messagesBubble">-->
<!--                    <div class="flex flex-column gap-y-1" :class="bubble.type === 'incoming' ? 'align-start' : 'align-end'">-->
<!--                        <div v-for="message in bubble.messages" class="position-relative break-words whitespace-pre-wrap text-sm shadow-sm rounded-lg p-2 max-w-[65%] min-w-4"-->
<!--                             :class="bubble.type === 'incoming' ? 'bg-surface-light' : 'bg-primary'" @contextmenu="show" :key="message.messageId">-->
<!--                            {{message.text}}-->
<!--                            <div class="time text-xs">-->
<!--                                <div v-text="message.time"></div>-->
<!--                                <v-icon icon="bi-check-all"></v-icon>-->
<!--                                <div class="time-inner">-->
<!--                                    <div v-text="message.time"></div>-->
<!--                                    <v-icon icon="bi-check-all"></v-icon>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <v-menu-->
<!--            v-model="showMenu"-->
<!--            absolute offset-y-->
<!--            :style="`top: ${y}px; left: ${x}px`"-->
<!--            transition="scale-transition">-->
<!--            <div class="flex flex-col p-2 rounded-lg">-->
<!--                <v-btn-->
<!--                    v-for="elem in contextMenuElements" class="text-none justify-start gap-x-2"-->
<!--                    :prepend-icon="elem.icon" :color="elem.color"-->
<!--                    size="small" variant="text" :text="elem.title" :title="elem.title">-->
<!--                </v-btn>-->
<!--            </div>-->
<!--        </v-menu>-->
<!--    </v-container>-->

<!--    <div class="flex gap-x-2 p-2">-->

<!--        <v-btn-->
<!--            icon="mdi-paperclip mdi-rotate-225"-->
<!--            variant="text"-->
<!--            size="small">-->
<!--        </v-btn>-->

<!--        <v-textarea-->
<!--            density="compact" auto-grow max-rows="5" rows="1" hide-details variant="plain">-->
<!--        </v-textarea>-->
<!--&lt;!&ndash;        <div class="w-100">&ndash;&gt;-->
<!--&lt;!&ndash;            <input class="w-100 h-100 outline-0">&ndash;&gt;-->
<!--&lt;!&ndash;        </div>&ndash;&gt;-->

<!--        <v-btn-->
<!--            icon="mdi-emoticon-happy-outline"-->
<!--            variant="text"-->
<!--            size="small">-->
<!--        </v-btn>-->

<!--        <v-btn-->
<!--            icon="mdi-send"-->
<!--            size="small"-->
<!--            variant="text"-->
<!--            color="primary">-->
<!--        </v-btn>-->

<!--        &lt;!&ndash;            <v-textarea&ndash;&gt;-->
<!--        &lt;!&ndash;                class="bg-transparent"&ndash;&gt;-->
<!--        &lt;!&ndash;                auto-grow&ndash;&gt;-->
<!--        &lt;!&ndash;                autofocus&ndash;&gt;-->
<!--        &lt;!&ndash;                rows="1"&ndash;&gt;-->
<!--        &lt;!&ndash;                placeholder="Сообщение"&ndash;&gt;-->
<!--        &lt;!&ndash;                type="textarea" variant="outlined">&ndash;&gt;-->
<!--        &lt;!&ndash;            </v-textarea>&ndash;&gt;-->
<!--&lt;!&ndash;        <v-btn icon="bi-emoji-smile" variant="text" size="small" title="Еще"></v-btn>&ndash;&gt;-->
<!--&lt;!&ndash;        <v-btn icon="bi-send" variant="text" size="small" title="Еще" color="primary"></v-btn>&ndash;&gt;-->
<!--    </div>-->
</template>

<style scoped>
    .time {
        visibility: hidden;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        line-height: 1;
        vertical-align: middle;
        pointer-events: none;
        display: inline-flex;
        z-index: 1;
        cursor: pointer;
        margin-inline-start: .2rem;
        direction: ltr;
        float: right;
    }

    .time-inner {
        inset-inline-end: 0;
        pointer-events: all;
        position: absolute;
        display: flex;
        align-items: center;
        line-height: 1;
        padding: inherit;
        visibility: visible;
        bottom: 0;
        margin-inline-end: 2px;
    }
</style>
