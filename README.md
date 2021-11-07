# CakePHP CRUD

A prospective employer currently uses CakePHP. This repo serves to show my ability to jump into and work with a PHP framework that isn't Laravel.

While there are CakePHP specific tools out there, this repo also showcases an ability to work with modern web tools, such as: Docker and Webpack; `Dockerfile`, `docker-compose.yml`, and `webpack.config.js` were written by myself.

## Requirements

- [Composer](https://getcomposer.org/download/)
- [Docker](https://www.docker.com/) and Docker Compose
- [Node](https://nodejs.org/en/) w/ NPM

## Installation

1. Clone this repository

    ```bash
    git clone https://github.com/mandicap/the-cake-is-a-lie.git
    ```

2. Install Composer dependencies

    ```bash
    cd the-cake-is-a-lie
    composer update
    ```

3. Install NPM dependencies

    ```bash
    yarn install
    ```

4. Compile and bundle assets

    ```bash
    yarn dev
    ```

5. Build Docker container

    ```bash
    docker-compose up -d
    ```

6. Run migrations and seeds

    ```bash
    docker-compose exec php-fpm bin/cake migrations migrate
    docker-compose exec php-fpm bin/cake migrations seed
    ```

6. Visit app at `localhost`