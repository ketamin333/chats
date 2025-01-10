{{--<!doctype html>--}}
{{--<html lang="ru">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}

{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">--}}

{{--    <link rel="stylesheet" href="{{asset('css/app.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/icons.css')}}">--}}

{{--    @vite('resources/css/app.css')--}}
{{--    @vite('resources/js/app.js')--}}

{{--    <title>@yield('title') | Chats</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="">--}}

{{--</div>--}}
{{--</nav>--}}
{{--<header class="">--}}
{{--    <div class="container py-3">--}}
{{--        <div class="d-flex align-items-center justify-content-between">--}}
{{--            <a class="fs-2 text-app-grey text-app-grey-hover"><i class="bi bi-chat-left-text-fill" href="/"></i></a>--}}
{{--            <div class="d-flex gap-4 align-items-center">--}}
{{--                <a class="text-app-grey text-app-grey-hover fs-6" href="/chats">Чаты</a>--}}
{{--                <a class="text-app-grey text-app-grey-hover fs-6" href="/chats">О нас</a>--}}
{{--                <button type="button" title="Войти"--}}
{{--                        class="btn-app btn-app-red text-white">Войти</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}
{{--<section class="container mt-3">--}}
{{--    @yield('content')--}}
{{--</section>--}}
{{--<div class="container">--}}
{{--    <header class="d-flex bg-danger">--}}
{{--        <div class="display-5 text-app">Заголовок</div>--}}
{{--    </header>--}}
{{--</div>--}}
{{--    <header class="navbar navbar-expand-lg position-sticky app-header">--}}

{{--    </header>--}}
{{--</body>--}}
{{--</html>--}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
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
    <v-app :theme="theme">
        <v-main class="!p-0 flex flex-row">
            <navbar></navbar>
            <v-container fluid class="my-2 rounded-2xl bg-surface-variant">
                <router-view></router-view>
            </v-container>
            <sidebar></sidebar>
        </v-main>
    </v-app>
{{--    <div class="h-full w-full">--}}
{{--        --}}
{{--    </div>--}}
</body>
</html>
