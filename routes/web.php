<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/contacts', function () {
    // Массив данных передаётся в шаблон contacts.blade.php.
    $contacts = [
        [
            'title' => 'ФИО',
            'value' => 'Данилова Ульяна Сергеевна',
            'href' => null,
        ],
        [
            'title' => 'Группа',
            'value' => '251-321',
            'href' => null,
        ],
        [
            'title' => 'Почта',
            'value' => 'ululul2000@mail.ru',
            'href' => 'mailto:ululul2000@mail.ru',
        ],
        [
            'title' => 'Телефон',
            'value' => '79103931455',
            'href' => 'tel:+79103931455',
        ],
    ];

    return view('contacts', ['contacts' => $contacts]);
})->name('contacts');
