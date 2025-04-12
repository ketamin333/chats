import { createStore } from 'vuex';

const sidebarStatus = JSON.parse(localStorage.getItem('sidebarStatus')) ?? true;

const store = createStore({
    state: {
        showSidebar: sidebarStatus,
    },
    mutations: {
        toggleSidebar(state) {
            state.showSidebar = !state.showSidebar;

            localStorage.setItem('sidebarStatus', state.showSidebar);
        },
    },
    actions: {
        toggleSidebar({ commit }) {
            commit('toggleSidebar');
        }
    },
    getters: {}
});

export default store;
