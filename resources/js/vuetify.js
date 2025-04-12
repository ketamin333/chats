import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const chatsDarkTheme = {
    dark: true,
    colors: {
        // background: '#000000',
        background: '#131313',
        'on-background': '#BDBDBD',


        // surface: '#1F2329',
        'surface-light': '#2C2C2C',

        surface: '#1E1F1E',
        // 'on-primary': '#FFFFFF',


        // surface: '#121212',
        // 'on-surface': '#BDBDBD',
        // 'on-surface': '#121212',
        //
        // 'surface-light': '#1E1F1E',
        // 'on-surface-light': '#FFFFFF',
        //
        // 'border-color': '#27272A',
        //
        primary: '#F24646',
        // 'on-primary': '#FFFFFF'
    }
}

const chatsLightTheme = {
    dark: false,
    colors: {
        // background: '#EAECEF',
        background: '#131313',

        // surface: '#F8F9FA',
        // surface: '#F8F9FA',
        // 'on-surface': '#3C3E44',

        // 'surface-variant': '#1F1F1F',
        // 'on-surface-variant': '#BDBDBD',

        'surface-light': '#BDBDBD',
        'on-surface-light': '#FFFFFF',

        'border-color': '#27272A',

        primary: '#26B170',
        'on-primary': '#FFFFFF'
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
