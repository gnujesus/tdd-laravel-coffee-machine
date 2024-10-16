# Coffee Machine Project

This project is a coffee machine application built with Laravel. Below are the steps to initialize the project, run tests, and view the frontend.

## Requirements

-   PHP >= 7.3
-   Composer
-   Node.js and npm

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/coffee-machine.git
    cd coffee-machine
    ```

2. Install PHP dependencies:

    ```bash
    composer install
    ```

3. Install Node.js dependencies:

    ```bash
    npm install
    ```

4. Copy the environment configuration file and generate an application key:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

## Initializing the Project

1. Start the Laravel development server:

    ```bash
    php artisan serve
    ```

2. In another terminal, compile the frontend assets:

    ```bash
    npm run dev
    ```

3. Open your browser and navigate to `http://localhost:8000` to see the application running.

## Running Tests

1. To run the tests, use the following command:

    ```bash
    php artisan test
    ```

2. The tests are located in the `tests/Unit` directory. This is where the unit tests for the application are found.

## Project Structure

-   `app/`: Contains the application source code.
-   `resources/views/`: Contains the Blade views of the application.
-   `tests/Unit/`: Contains the unit tests.
-   `public/`: Contains public files like CSS, JS, etc.

## Notes

-   Make sure your development environment is correctly set up with the required versions of PHP, Composer, Node.js, and npm.
-   If you encounter any issues, check the logs in `storage/logs/laravel.log` for more details.

Enjoy your coffee!
