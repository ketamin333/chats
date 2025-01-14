<script>

export default {
    data: () => ({
        messages: {
            '2025-01-12': [
                {
                    type: 'outgoing',
                    messages: [
                        {
                            text: 'word-break: break-word; \n' +
                                'white-space: pre-wrap;\n' +
                                'word-break: break-word; \n' +
                                'white-space: pre-wrap;',
                            time: '13:12',
                            messageId: 1
                        },
                        {
                            text: 'Oh yeah',
                            time: '21:11',
                            messageId: 2
                        },
                    ]
                },
                {
                    type: 'incoming',
                    messages: [
                        {
                            text: 'Its the best part.',
                            time: '14:21',
                            messageId: 3
                        },
                        {
                            text: 'Its crunchy, its explosive!',
                            time: '15:43',
                            messageId: 4
                        }
                    ]
                }
            ],
            '2025-01-11': [
                {
                    type: 'outgoing',
                    messages: [
                        {
                            text: 'word-break: break-word; \n' +
                                'white-space: pre-wrap;\n' +
                                'word-break: break-word; \n' +
                                'white-space: pre-wrap;',
                            time: '13:12',
                            messageId: 5
                        },
                        {
                            text: 'Oh yeah',
                            time: '21:11',
                            messageId: 6
                        },
                    ]
                },
                {
                    type: 'incoming',
                    messages: [
                        {
                            text: 'Its the best part.',
                            time: '14:21',
                            messageId: 7
                        },
                        {
                            text: 'Its crunchy, its explosive!',
                            time: '15:43',
                            messageId: 8
                        }
                    ]
                }
            ],
            '2025-01-09': [
                {
                    type: 'outgoing',
                    messages: [
                        {
                            text: 'word-break: break-word; \n' +
                                'white-space: pre-wrap;\n' +
                                'word-break: break-word; \n' +
                                'white-space: pre-wrap;',
                            time: '13:12',
                            messageId: 9
                        },
                        {
                            text: 'Oh yeah',
                            time: '21:11',
                            messageId: 10
                        },
                    ]
                },
                {
                    type: 'incoming',
                    messages: [
                        {
                            text: 'Its the best part.',
                            time: '14:21',
                            messageId: 11
                        },
                        {
                            text: 'Its crunchy, its explosive!',
                            time: '15:43',
                            messageId: 12
                        }
                    ]
                }
            ],
        },
        client: {
            avatar: 'https://img.freepik.com/free-photo/cute-ai-generated-cartoon-bunny_23-2150288874.jpg',
            title: 'Катя',
            subtitle: 'whatsapp',
            pins: [3, 6]
        },
        selectedMessages: {
            show: false,
            messages: []
        },
        showMenu: false,
        x: 0,
        y: 0,
        contextMenuElements: [
            {
                title: 'Изменить',
                icon: 'bi-pencil-fill',
                color: 'default'
            },
            {
                title: 'Скопировать',
                icon: 'bi-copy',
                color: 'default'
            },
            {
                title: 'Выбрать',
                icon: 'bi-check-circle',
                color: 'default'
            },
            {
                title: 'Закрепить',
                icon: 'bi-pin',
                color: 'default'
            },
            {
                title: 'Удалить',
                icon: 'bi-trash3',
                color: 'primary'
            },
        ],
    }),
    methods: {
        messageDate(date) {
            return new Date(date).toLocaleString('ru', {
                day: 'numeric',
                month: 'long',
            })
        },
        show (e) {
            e.preventDefault()
            this.showMenu = false
            this.x = e.clientX
            this.y = e.clientY
            this.$nextTick(() => {
                this.showMenu = true
            });
        },
    }
}

import { computed } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();
const chatId = computed(() => route.params.chatId);
</script>

<template>
    <div class="bg-surface">
        <v-list-item
            :prepend-avatar="client.avatar"
            rounded="lg" class="!p-3">

            <v-list-item-title class="flex justify-between align-center">
                <div class="font-bold truncate text-base" v-text="client.title"></div>
            </v-list-item-title>
            <v-list-item-subtitle v-text="client.subtitle" class="text-sm"></v-list-item-subtitle>

            <template v-slot:append>
                <div class="flex gap-x-2">
                    <v-btn icon="bi-three-dots-vertical" variant="text" size="small" title="Еще"></v-btn>
                </div>
            </template>
        </v-list-item>
    </div>

    <v-container class="h-full overflow-y-auto flex flex-column-reverse gap-y-4">
        <div v-for="(messagesBubble, date) in messages">
            <div class="flex justify-center mb-4">
                <div class="text-sm px-3 bg-surface py-1 rounded-xl" v-text="messageDate(date)"></div>
            </div>
            <div class="flex flex-col gap-y-2">
                <div v-for="bubble in messagesBubble">
                    <div class="flex flex-column gap-y-1" :class="bubble.type === 'incoming' ? 'align-start' : 'align-end'">
                        <div v-for="message in bubble.messages" class="position-relative break-words whitespace-pre-wrap text-sm rounded-lg p-2 max-w-[65%] min-w-4"
                             :class="bubble.type === 'incoming' ? 'bg-surface' : 'bg-primary'" @contextmenu="show" :key="message.messageId">
                            {{message.text}}
                            <div class="time text-xs">
                                <div v-text="message.time"></div>
                                <v-icon icon="bi-check-all"></v-icon>
                                <div class="time-inner">
                                    <div v-text="message.time"></div>
                                    <v-icon icon="bi-check-all"></v-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <v-menu
            v-model="showMenu"
            absolute offset-y
            :style="`top: ${y}px; left: ${x}px`"
            transition="scale-transition">
            <div class="flex flex-col p-2 bg-surface rounded-lg">
                <v-btn
                    v-for="elem in contextMenuElements" class="text-none justify-start gap-x-2"
                    :prepend-icon="elem.icon" :color="elem.color"
                    size="small" variant="text" :text="elem.title" :title="elem.title">
                </v-btn>
            </div>
        </v-menu>
    </v-container>

    <div class="bg-surface p-2">
        <div class="flex gap-x-2">
            <v-btn icon="bi-paperclip" variant="text" size="small" title="Прикрепить файл"></v-btn>
<!--            <v-textarea-->
<!--                class="bg-transparent"-->
<!--                auto-grow-->
<!--                autofocus-->
<!--                rows="1"-->
<!--                placeholder="Сообщение"-->
<!--                type="textarea" variant="outlined">-->
<!--            </v-textarea>-->
            <v-btn icon="bi-emoji-smile" variant="text" size="small" title="Еще"></v-btn>
            <v-btn icon="bi-send" variant="text" size="small" title="Еще" color="primary"></v-btn>
        </div>
    </div>
</template>

<style scoped>
.portrait.v-card {
    margin: 0 auto;
    max-width: 600px;
    width: 100%;
}

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
