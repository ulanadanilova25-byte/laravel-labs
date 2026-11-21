# Blade.Route

Учебный сайт на **Laravel 12 + Blade**. В проекте показаны общий макет страниц, именованные маршруты, передача массива данных в `view()` и динамический вывод контактов.

## Реализовано

- общий Blade-макет `resources/views/layouts/app.blade.php`;
- навигация со ссылками на страницы «О нас» и «Контакты»;
- приветственная главная страница `/`;
- текстовая страница `/about`;
- маршрут `/contacts`, который формирует массив `$contacts` и передаёт его в представление через `view('contacts', compact('contacts'))`;
- динамический вывод контактных данных через цикл `@foreach`;
- адаптивная вёрстка без внешних UI-библиотек;
- footer с ФИО Даниловой Ульяны Сергеевны и группой 251-321.

## Запуск

Требования: PHP 8.2+, Composer.

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

После запуска откройте `http://127.0.0.1:8000`.

## Где менять данные

- Маршруты: `routes/web.php`.
- Контактные данные: массив `$contacts` в маршруте `/contacts`.
- ФИО и группа: `resources/views/layouts/app.blade.php`.
- Упрощённая вёрстка: `resources/views` и `public/css/app.css`.
- Стили: `public/css/app.css`.
