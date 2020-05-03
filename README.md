# Docker-Dev
Окружение для веб-разработки на базе Docker. Включает в себя:

* Nginx
* PHP 7.4
* MariaDB
* Adminer
* MailHog 

# Как использовать?

1. Клонировать или скачать репозиторий.

2. Установить **docker** и **docker-compose**.

3. Добавить в файл **hosts** вашей ОС новые хосты:

    ```
    127.0.0.1       main
    ::1  		main
    127.0.0.1       bitrix
    ::1  		bitrix
    127.0.0.1       trash
    ::1  		trash
    127.0.0.1       main.local
    ::1  		main.local
    127.0.0.1       bitrix.local
    ::1  		bitrix.local
    127.0.0.1       trash.local
    ::1  		trash.local
    ```
   
4. Для запуска окружения использовать команду:

    ```
    docker-compose up -d
    ```
   
5. Для остановки окружения использовать команду:

    ```
    docker-compose down
    ```
   
6. Для размещения проектов использовать любой из дочерних каталогов в каталоге **data**. URL маппятся на каталоги следующим образом:

    | URL                            | Каталог                          |
    | ------------------------------ | ------------------------------   |
    | http://localhost/              | data/main/                       |
    | http://main/                   | data/main/                       |
    | http://main.local/             | data/main/                       |
    | http://trash/                  | data/trash/                      |
    | http://trash.local/            | data/trash/                      |
    | http://bitrix/                 | data/bitrix/                     |
    | http://bitrix.local/           | data/bitrix/                     |
    
   Каталог **data/bitrix/** имеет специфичные настройки на стороне **Nginx** для размещения в нем дистрибутивов **Bitrix**.
   
7. **Adminer** доступен по адресу http://localhost:8080/

8. **MailHog** доступен по адресу http://localhost:8025/
