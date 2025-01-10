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
        'border-color': '#27272A',
        'surface-light': '#FFFFFF'
    }
}

const chatsLightTheme = {
    dark: false,
    colors: {
        background: '#FFFFFF',
        surface: '#FFFFFF',
        'on-surface': '#000000',
        'surface-variant': '#E9ECEF',
        'border-color': '#EAEAEA',
        'surface-light': '#000000'
    }
}

export const vuetify= createVuetify({
    components,
    directives,
    theme: {
        defaultTheme: 'chatsDarkTheme',
        themes: {
            chatsDarkTheme,
            chatsLightTheme
        },
    },
});
