Отчёт по курсовой работе
========================
по курсу Основы программирования  
по теме Электронная очередь

выполнила: Пронина Э.О. 3132 группа  
преподаватель: Жиданов К.А.

Санкт-Петербург, 2023 г. 

#### Задание
------------------------
Электронная очередь. Реализация в системе интерфейс для получения талонов, отображения очереди, админка для добавления служащих и учета их работы.

#### Реализация
------------------------
Был разработан сайт электронной очереди на промежуточнцю аттестацию. Реализован интерфейс для получения номера в очереди, отображения очереди, а так же админка для добавления работников (преподавателей) и учета их работы в виде отслеживания количества принятых студентов в очереди.

#### Выбор технологии
------------------------
*Среда разработки:* PHPStorm, OpenServer (портативная программная среда)  
*Инструменты:* PHP 8.0, MySQL-8.0, Apache 2.4, PhpMyAdmin  
*Фреймворк:* Bootstrap 5  

#### Процесс реализации
------------------------

#### Пользовательский сценарий работы

Пользователь попадает на главную страницу **index.php**.
Ему предлагается встать в очередь на аттестацию, посмотреть очередь или авторизироваться, если пользователь является работником.
Если пользователь выберает "встать в очередь", то он переходит на страницу **getline.php**, где он может выбрать предмет, который хочет сдать. Так же пользователь может перейти сразу к просмотру очереди или верновнуться на главную.
При выборе предмета его перебрасывает на **number.php** где указывается его 4х знначный номер в очереди. С этой странницы он может перейти обратно на **getline.php**, чтобы встать в еще одну очередь, вернуться на главную (**index.php**) и посмотреть саму очередь.
На странице очереди **queue.php** выводится табло с кабинетами и соответсвующими номерами талолонов.
Авторизация происходит на странице **log.php**, где работник может войти в совю учетную запись.
Если заходит преподаватель, то его перебрасывает на страницу **profile.php**, где ему выводится сколько осталось студентов в очереди по его предмету, кнопка вызова следующего студента и по завершении работы ссылка на выход.
Если зайти под аккаунтом администратора, то осуществляется переход на страницу **userindex.php** где выводится таблица всех учетных записей. Данные работников можно изменить на этой странице или удалить вовсе.
Сбоку имеются ссылки "список работников" (**userindex.php**), "добавить работника", "учет работы" и "выход".
"Добавить работника" (**create.php**). Здесь администратор может создать учетную запись работника.
"Учет работы" (**admlog.php**). Здесь выводится таблица пользоватей с информацией о том, сколько студентов принял преподаватель и сколько человек встало в очередь.


#### Структура базы данных

![хореография](https://github.com/prelinory/course-work/blob/main/img/api.jpg)


#### Алгоритм

Алгоритм, чтобы встать в очередь
![студенты](https://github.com/prelinory/course-work/blob/main/img/algst.png)

Алгорит работы для преподаватей и администратора
![преподаватели](https://github.com/prelinory/course-work/blob/main/img/algteacher.png)

