# Laravel TODO APP 

This is a simple Todo App with multiple user support and built on Laravel 8 Framework.

## Installion 

1- Open CMD and clone the repository-

``` git clone  https://github.com/Aysegnn/TodoList.git```

2-Then cd into the folder with this command-


```cd TodoList ```

3-Then do a composer install this command-

```  composer install  ```

4-Then create a environment file using this command-

``` cp .env.example .env ```

5- Then edit .env file with appropriate credential for your database server. Just edit these two parameter(DB_USERNAME, DB_PASSWORD).

Then create a database named todolist and then do a database migration using this command-


``` php artisan migrate```

6-At last generate application key, which will be used for password hashing, session and cookie encryption etc.

```php artisan key:generate```

# Run Server

Run server using this command-

```php artisan serve ```

Then go to http://localhost:8000 from your browser and see the app.

# Screenshots

Project Home Page

![1](https://user-images.githubusercontent.com/78081820/129488701-9bd59b34-5a50-4853-8474-bd4233790987.PNG)

Login Page

![login](https://user-images.githubusercontent.com/78081820/129488730-b760e8d0-43ef-4510-8f72-dd3b95251864.PNG)

Register Page

![register](https://user-images.githubusercontent.com/78081820/129488738-8688c91f-20e6-4ede-9f48-c345c255c356.PNG)

Todos Adding and Listing Page

![todolist](https://user-images.githubusercontent.com/78081820/129488743-b63206c8-1f7e-49ee-9791-e964892411f1.PNG)

Completed Tasks Listing Page

![completed](https://user-images.githubusercontent.com/78081820/129488780-2bbae499-b19c-4994-97f9-0d22b7ee5485.PNG)




