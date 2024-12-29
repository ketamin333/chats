<template>
    <nav class="sidebar" :class="{ expanded: isExpanded }" @mouseover="expandPanel" @mouseleave="collapsePanel">
<!--            <ul>-->
<!--                <li>-->
<!--                    <router-link to="/home" class="panel-link" active-class="active">-->
<!--                        <div class="link-content">-->
<!--                            <span class="panel-icon">🏠</span>-->
<!--                            <span class="link-extra" v-show="isExpanded">Главная</span>-->
<!--                        </div>-->
<!--                    </router-link>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <router-link to="/childrens" class="panel-link" active-class="active">-->
<!--                        <div class="link-content">-->
<!--                            <span class="panel-icon">👶</span>-->
<!--                            <span class="link-extra" v-show="isExpanded">Дети</span>-->
<!--                        </div>-->
<!--                    </router-link>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <router-link to="/themes" class="panel-link" active-class="active">-->
<!--                        <div class="link-content">-->
<!--                            <span class="panel-icon">📑</span>-->
<!--                            <span class="link-extra" v-show="isExpanded">Темы занятий</span>-->
<!--                        </div>-->
<!--                    </router-link>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <router-link to="/reports" class="panel-link" active-class="active">-->
<!--                        <div class="link-content">-->
<!--                            <span class="panel-icon">📚</span>-->
<!--                            <span class="link-extra" v-show="isExpanded">Отчеты</span>-->
<!--                        </div>-->
<!--                    </router-link>-->
<!--                </li>-->
<!--                <li class="bottom-link">-->
<!--                    <router-link to="/profile" class="panel-link" active-class="active">-->
<!--                        <div class="link-content">-->
<!--                            <span class="panel-icon">👤</span>-->
<!--                            <span class="link-extra" v-show="isExpanded">Профиль</span>-->
<!--                        </div>-->
<!--                    </router-link>-->
<!--                </li>-->
<!--            </ul>-->
    </nav>
</template>

<script>
export default {
    data() {
        return {
            isExpanded: false,
        };
    },
    methods: {
        expandPanel() {
            this.isExpanded = true;
        },
        collapsePanel() {
            this.isExpanded = false;
        },
    },
};
</script>

<style scoped>
    .sidebar {
        background-color: var(--app-black);
        backdrop-filter: blur(50px);
        height: 100%;
        position: relative;
    }
</style>
