# Online shop

## Технологии

- php8.3
- Laravel
- PostgresSQL

## Установка

### Docker

1. Клонируйте репозиторий

    ```shell
    git clone git@github.com:zarasfara/online-shop.git
    ```

2. Копируйте .env.example .env

    Linux:
    ```shell
    cp .env.example .env
    ```
   Windows:
    ```shell
    copy .env.example .env
    ```
3. Настройте .env
    1. Измение как вам надо DB_DATABASE
    2. Измение как вам надо DB_USERNAME
    3. Заполните DB_PASSWORD
4. Соберите контейнеры
    ```shell
   docker compose up -d --build
    ```
5. Посмотрите контейнеры
    ```shell
    docker ps
    ```
6. Зайдите в контейнер с приложением используя команду и скопируя `CONTAINER ID` или `NAME` из прошлой команды
    ```shell
    docker exec -it <container-php-fpm> bash
    ```
7. Запустите скрипт
    ```shell
    ./setup.sh
    ```
