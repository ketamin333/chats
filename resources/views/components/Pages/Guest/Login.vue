<script>
    import { ref, reactive } from 'vue'
    import axios from 'axios';

    import { useVuelidate } from '@vuelidate/core';
    import { email, required } from '@vuelidate/validators';

    export default {
        data: () => {
            return {
                visiblePassword: ref(false),
                email: '',
                password: '',
            }
        },
        setup() {
            return {
                v$: useVuelidate()
            }
        },
        validations () {
            return {
                email: {
                    required,
                    email
                },
                password: {
                    required
                }
            }
        },
        methods: {
            login() {
                this.v$.$validate();

                axios.post('/api/app/auth', {
                    email: this.email,
                    password: this.password,
                }).then(this.$router.push('chats'));
            },
        },
    }
</script>

<style>
.profile {
    width: 250px;
    height: 250px;
    position: relative;

    background-image: url("https://townofbeekmantown.com/wp-content/uploads/2019/06/2-dog.jpg");

    background-size: cover;
    background-position: 0px;
}

.name {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;

    padding-top: 15px;
    padding-bottom: 15px;

    background: rgba( 0, 0, 0, 0.6 );
    backdrop-filter: blur(10px);

    color: white;

    text-align: center;
}
</style>

<template>
<!--    <div>-->
<!--        <div class="profile">-->
<!--            <div class="name">Dog</div>-->
<!--        </div>-->
<!--    </div>-->

    <v-container class="align-center d-flex justify-center h-full" fill-height fluid>
        <div class="flex flex-column gap-y-6">

            <v-sheet rounded="lg" elevation="12" style="background: rgb(var(--v-theme-surface-light), .75)"
                     class="p-12 backdrop-blur-md"  min-width="500">

                <div class="flex flex-column gap-y-6">
                    <span class="text-4xl text-left font-bold text-white">Войти</span>

                    <div class="flex flex-column">
                        <v-text-field
                            placeholder="Email"
                            variant="outlined"
                            rounded="lg"
                            prepend-inner-icon="mdi-email text-primary !text-xl opacity-100">
                        </v-text-field>
                        <v-text-field
                            placeholder="Пароль"
                            variant="outlined"
                            rounded="lg"
                            type="password"
                            prepend-inner-icon="mdi-key text-primary !text-xl opacity-100">
                        </v-text-field>
                        <v-checkbox
                            label="Запомнить меня"
                            color="primary"
                            hide-details>
                        </v-checkbox>
                    </div>

                    <v-btn color="primary" text="Войти" size="large">

                    </v-btn>
                </div>

            </v-sheet>

<!--            <div class="flex flex-col gap-y-2 text-sm font-semibold text-center">-->
<!--                <div class="d-flex justify-center gap-x-2">-->
<!--                    <div>У Вас нет аккаунта — </div>-->
<!--                    <router-link to="/register" class="text-primary">Зарегестрируйтесь!</router-link>-->
<!--                </div>-->
<!--                <router-link to="/password" class="text-primary">Забыли пароль?</router-link>-->
<!--            </div>-->
        </div>
    </v-container>
<!--    <v-row>-->
<!--        <v-col cols="6" class="bg-surface-variant h-full"></v-col>-->
<!--        <v-col cols="6" class="!h-full flex justify-center py-10">-->
<!--            <v-sheet width="400">-->
<!--                <div class="flex flex-col gap-y-6">-->
<!--                    <div class="!text-xl font-bold">Войти в Чаты</div>-->

<!--                    <v-form class="flex flex-col gap-y-2" @submit.prevent="login">-->
<!--                        <v-text-field-->
<!--                            label="Email"-->
<!--                            variant="outlined"-->
<!--                            density="compact"-->
<!--                            v-model="email"-->
<!--                            :error-messages="v$.email.$errors.map(e => e.$message)"-->
<!--                            required-->
<!--                            @blur="v$.email.$touch"-->
<!--                        ></v-text-field>-->
<!--                        <v-text-field-->
<!--                            variant="outlined"-->
<!--                            label="Пароль"-->
<!--                            density="compact"-->
<!--                            v-model="password"-->
<!--                            :error-messages="v$.password.$errors.map(e => e.$message)"-->
<!--                            required-->
<!--                            @blur="v$.password.$touch"-->
<!--                            :append-inner-icon="visiblePassword ? 'bi-eye-slash !text-sm  text-primary' : 'bi-eye !text-sm  text-primary'"-->
<!--                            :type="visiblePassword ? 'text' : 'password'"-->
<!--                            @click:append-inner="visiblePassword = !visiblePassword"-->
<!--                        ></v-text-field>-->
<!--                        <v-btn-->
<!--                            text="Войти"-->
<!--                            color="primary"-->
<!--                            class="text-none"-->
<!--                            append-icon="bi-arrow-right-short"-->
<!--                            type="submit">-->
<!--                        </v-btn>-->
<!--                    </v-form>-->
<!--                </div>-->
<!--            </v-sheet>-->
<!--        </v-col>-->
<!--    </v-row>-->
</template>

<style scoped>

</style>
