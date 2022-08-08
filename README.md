# KSI Task


## Task 1
```
in tests/Unit/ArrayDiffTest

run : vendor/bin/phpunit

```

## Installation : Task 2

First clone this repository, install the dependencies, and setup your .env file.

```
git clone git@github.com:3omarbadr/KSI.git
composer install
cp .env.example .env
```

Then create the necessary database.

```
php artisan db
create database KSI
```

And run the initial migrations and seeders.

```
php artisan migrate --seed
```

## API Routes

```
FetchEntries : http://localhost:8000/api/entries

AddEntry : http://localhost:8000/api/entries/store

RemoveEntry : http://localhost:8000/api/entries/{id}
```

