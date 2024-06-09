# Laravel To-Do Manager

A To-Do List Manager app, to help organise your tasks.

## Description

This To-Do Manager app is a Laravel project that fetches and displays information about various personal tasks (each linked to a category type) from a MySQL database. You can view a list of To-Do's which can be filtered by complete or incomplete. Each task can also be viewed indiviudally. 

## Getting Started

### Dependencies

- Laravel
- PHP version 7.0.0+
- MySQL version 5.7+

### Installing

1. Clone this repo:
   ```bash
   git@github.com:bbsaint590/Laravel-to-do-manager.git
   
2. Navigate into the newly created repo:
   ```bash
   cd to-do-manager
   
3. From the root of the project, run:
   ```bash
   composer install
   
4. Generate the application key:
   ```bash
   php artisan key:generate
   
5. Create a new MySQL database named laravel_furniture_store and import the provided 
   SQL file: /
   
7. Ensure that details are correct in the .env file, in order to connect the 
   database.
   DB_CONNECTION=mysql, 
   DB_DATABASE=*******, and 
   DB_PASSWORD=password
   
8. **Run the database migrations (if needed):**

    ```bash
    php artisan migrate
    ```

9. **Start the Laravel development server:**

    ```bash
    php artisan serve
    ```

The application will now be available at [http://localhost:8000](http://localhost:8000).

## Authors

- Ben Blyth - [@bbsaint590](https://github.com/bbsaint590)

## Links

- GitHub Repo: [(https://github.com/bbsaint590/Laravel-to-do-manager)]

## Acknowledgements

- Laravel Framework Documentation: [https://laravel.com/docs](https://laravel.com/docs)
- Any other libraries, tools, or individuals who contributed to the project.
