# Online shop

## Технологии

- php8.2
- Laravel
- PostgresSQL

## Установка

### Docker

1. Клонируйте репозиторий

    ```shell
    git clone <repository-url>
    ```

2. Копируйте .env.example .env
    ```shell
    cp .env.example .env
    ```
   или
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
6. Зайдите в контейнер с приложением
    ```shell
    docker exec -it <container-php-fpm> bash
    ```
7. Запустите скрипт
    ```shell
    shell.sh
    ```
