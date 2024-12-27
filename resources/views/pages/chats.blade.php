@extends('layouts.app')
@section('title', 'Мои чаты')

@section('content')
    <div class="row g-3">
        <div class="col-4">
            <div class="app-block rounded-3 text-app-grey d-flex flex-column gap-1">
                <div class="row g-2 align-items-center p-3 cursor-pointer text-truncate">
                    <div class="col-auto">
                        <div class="rounded-circle" style="width: 48px; height: 48px; background-image: url('https://i.pinimg.com/736x/dd/f8/78/ddf87827dd19e5a841f1994688f84ce8.jpg'); background-size: cover;"></div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-between">
                                <div class="fs-lg fw-bolder">Катя</div>
                                <div class="fs-sm">15:45</div>
                            </div>
                            <div class="fs-sm text-truncate">Laravel is a web application framework with expressive Laravel</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="app-block p-3 rounded-3 text-app-grey d-flex flex-column gap-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex gap-2">
                        <div class="rounded-circle" style="width: 48px; height: 48px; background-image: url('https://i.pinimg.com/736x/dd/f8/78/ddf87827dd19e5a841f1994688f84ce8.jpg'); background-size: cover;"></div>
                        <div class="d-flex flex-column">
                            <div class="fs-5 fw-bolder">Катя</div>
                            <div class="fs-sm">Laravel is a web application framework with expressive</div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <div class="bi bi-search cursor-pointer fs-6 text-app-grey-hover"></div>
                        <div class="bi bi-three-dots-vertical cursor-pointer fs-5 text-app-grey-hover"></div>
                    </div>
                </div>
                <div class="app-block-chat">
                    <div class="app-container-message app-container-message-outgoing">
                        <div class="app-block-message">
                            <div class="fs-lg">привет все хорошо</div>
                            <div class="fs-sm ps-3 text-end">15:45</div>
                        </div>
                    </div>
                    <div class="app-container-message app-container-message-incoming">
                        <div class="app-block-message">
                            <div class="fs-lg">привет какие у тебя дела?</div>
                            <div class="fs-sm ps-3 text-end">15:45</div>
                        </div>
                    </div>
                    <div class="app-container-message-date">
                        <div class="app-block-message-date">24 декабря</div>
                    </div>
                </div>
                <div class="row g-0 align-items-start app">
                    <div class="col">
                        <textarea class="form-message" rows="1" placeholder="Напишите сообщение" oninput="$(this).css('height', 'auto'); $(this).css('height', this.scrollHeight + 'px')"></textarea>
                    </div>
                    <div class="col-auto">
                        <div class="icon-send cursor-pointer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
