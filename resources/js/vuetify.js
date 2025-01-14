import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const chatsDarkTheme = {
    dark: true,
    colors: {
        background: '#121212',
        surface: '#121212',
        'on-surface': '#BDBDBD',
        'surface-variant': '#000000',
        'on-surface-variant': '#AAAAAA',
        'border-color': '#27272A',
        'surface-bright': '#252526',
        'surface-light': '#FFFFFF',
        primary: '#F24646',
    }
}

const chatsLightTheme = {
    dark: false,
    colors: {
        background: '#FFFFFF',
        surface: '#FFFFFF',
        'on-surface': '#000000',
        'surface-variant': '#E9ECEF',
        'on-surface-variant': '#AAAAAA',
        'border-color': '#EAEAEA',
        'surface-light': '#000000',
        primary: '#8674E1',

    }
}

export const vuetify= createVuetify({
    components,
    directives,
    theme: {
        defaultTheme: 'chatsDarkTheme',
        options: {customProperties: true,},
        themes: {
            chatsDarkTheme,
            chatsLightTheme
        },
    },
    VRipple: false,

});
