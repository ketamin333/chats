<!--<script setup>-->
<!--import ContextMenu from '@imengyu/vue3-context-menu'-->

<!--function onContextMenu(e) {-->
<!--    //prevent the browser's default menu-->
<!--    e.preventDefault();-->
<!--    //show your menu-->
<!--    ContextMenu.showContextMenu({-->
<!--        x: e.x,-->
<!--        y: e.y,-->
<!--        items: [-->
<!--            {-->
<!--                label: "A menu item",-->
<!--                onClick: () => {-->
<!--                    alert("You click a menu item");-->
<!--                }-->
<!--            },-->
<!--            {-->
<!--                label: "A submenu",-->
<!--                children: [-->
<!--                    { label: "Item1" },-->
<!--                    { label: "Item2" },-->
<!--                    { label: "Item3" },-->
<!--                ]-->
<!--            },-->
<!--        ]-->
<!--    });-->
<!--}-->
<!--</script>-->

<!--<template>-->
<!--    <button @contextmenu="onContextMenu">Right click me to show context menu!</button>-->
<!--</template>-->

<!--<style scoped>-->
<!--</style>-->

<template>
    <div id="app">
        <v-app id="inspire">
            <div>
                <v-row
                    class="flex"
                    justify="center"
                >
                    <v-card
                        :ripple="false"
                        class="portrait"
                        img="https://cdn.vuetifyjs.com/images/cards/girl.jpg"
                        height="300px"
                        @contextmenu="show"
                    ></v-card>
                </v-row>

            </div>
        </v-app>
    </div>
</template>

<script>
export default {
    data: () => ({
        showMenu: false,
        x: 0,
        y: 0,
        items: [
            { title: 'Click Me' },
            { title: 'Click Me' },
            { title: 'Click Me' },
            { title: 'Click Me 2' },
        ],
    }),
    methods: {
        show (e) {
            e.preventDefault()
            this.showMenu = false
            this.x = e.clientX
            this.y = e.clientY
            this.$nextTick(() => {
                this.showMenu = true
            })
        },
    },
}
</script>

<style>
.portrait.v-card {
    margin: 0 auto;
    max-width: 600px;
    width: 100%;
}
</style>
