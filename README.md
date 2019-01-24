# test_app

Цель: создать Web приложение для мониторинга навыков сотрудников.

Описание тестового задания:
Приложение состоит из 2х страниц

1. Страница создания сотрудников
Зайдя на страницу создания сотрудника мы можем
1) Ввести ФИО сотрудника (обязательное поле)
2) Выбрать фото сотрудника (если фото нет то на странице поиска показывать произвольную картинку)
3) Указать характеристики сотрудника.
Каждый сотрудник имеет конечное число характеристик – Коммуникабельность/Инженерные навык/Тайм менеджмент/Знание языков.
Каждая характеристика может принимать значение от 0 до 10.
4) Повесить проект на сотрудника. Список проектов сгенерировать автоматически при разворачивании приложения ПРОЕКТ 1, ПРОЕКТ2 … ПРОЕКТ 15
5) По умолчанию сотрудник может иметь не больше одного проекта(при выборе второго он заменяет первый), но при Значении 10 в характеристике «Тайм менеджмент» можно повесить больше проектов.

2. Страница сотрудников
На странице нужно реализовать:
1) Список всех сотрудников(фото + ФИО), характеристики и количество проектов на сотруднике(только число).
2) Поле поиска по ФИО (поиск динамический без перезагрузки страниц)
3) Среднее значение характеристик всех сотрудников.

Требования:
Дизайн - произвольный (можно использовать готовые шаблоны, или фреймверки).
Бекенд — PHP фреймверк (Laravel, Symphony, YII ect);
Фронтенд — фреймверки и технологии на ваш выбор. SPA фронтенд будет большим плюсом(Angular, react, vue js ect).


<p>    
<h3>Yii 2 Basic Project</h3>
</p>

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources

INSTALLATION
------------

### Install

git clone https://github.com/slpuh/test_app.git

composer install



CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];``



