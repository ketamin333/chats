<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, minimal-ui, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <title></title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body id="chats">
    <v-app>
        <navbar></navbar>

        <v-main class="py-2 overflow-y-auto h-screen">
            <v-container class="rounded-2xl h-full bg-surface-variant !p-6">
                <router-view></router-view>
            </v-container>
        </v-main>

        <sidebar></sidebar>
    </v-app>
</body>
</html>
