# Новостной блог

#

## Установка и запуск:

- 1 Клонирование репозитория:

```
git clone <URL репозитория>
cd <папка проекта>
```

- 2 Настройка окружения:

Скопируйте .env.example в .env:

```
cp .env.example .env
```

Обновите переменные в .env, если необходимо (например, настройки базы данных или Redis).

## Установка и управление проектом

Для установки проекта необходимо в корне проекта выполняете команду:

```make build```

Накатите миграции:

```make db-migrate```

Соберите JS-приложение:

```
make npm-install
make build-js
```

Запустите WebSocket сервера
```
make reverb-serve
```
