# HNG9 Tasks


## Built With

[Laravel](https://laravel.com/)

Getting Started
To get a local copy up and running follow these simple  steps.

## Prerequisites

1. This project ships with a .env.example file in the root of the project.
Rename this file to just .env
2. Project dependencies are managed through the PHP Composer tool.
3. In order to install the Javascript packages for frontend development, you will need the Node Package Manager.

## Installation

1. Clone the repo

```
git clone https://github.com/akoshodi/aboutapi 
```

2. Install Composer packages. Navigate into the root of the project in terminal and type this command  to install the depencencies:

```
composer install

```

3. Install NPM packages. Run this command from the root of the project:

```
npm install
```

4. Create Database

Create your database on your server and in the .env file update the following lines:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Change these lines to reflect your new database settings.

5. Artisan Commands

The first thing we are going to do is set the key that Laravel will use when encrypting.

```
php artisan key:generate
```

You should see a green message stating your key was successfully generated. As well as you should see the APP_KEY variable in your .env file reflected.

Run the built in migrations to create the database tables:

```
php artisan migrate
```

6. NPM Run '*'
Run **npm run dev** to build the styles and scripts.

7. Launch site

Use Laravel's **artisan serve** command to start PHP's built-in development server.

## REST Endpoints
### [Task 01](/hng9_tasks/task01.md)
```
GET /api/profile
```
Sample response
```
{ 
    "slackUsername": "hnguser", 
    "backend": true, 
    "age": 30, 
    "bio": "Backend developer" 
}
```
### [Task 02](/hng9_tasks/task02.md)
```
POST /api/calculate
```
Sample response
```
{
    “slackUsername”: "hnguser", 
    “result”: 54, 
    “operation_type”: "addition" 
}
```