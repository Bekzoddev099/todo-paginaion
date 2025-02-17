# TODO App

## Description
Yet another Todo app. This application allows users to manage their tasks efficiently. It includes features like adding, completing, and deleting tasks. Additionally, it integrates with Telegram to manage tasks via a bot.

## Requirements
- PHP 8.3 or higher
- Composer
- MySQL

## Installation

1. Clone the repository:
    ```shell
    git clone https://github.com/rustam-swe/todo-app.git
    cd todo-app
    ```

2. Install dependencies using Composer:
    ```shell
    composer install
    ```

3. Set up the database:
    - Create a MySQL database named `todo_app`.
    - Import the `dump.sql` file to set up the tables and initial data:
        ```shell
        mysqldump -u root -p todo_app < dump.sql
        ```

4. Configure the database connection in `src/DB.php`:
    ```php:src/DB.php
    config goes here
    ```

___

## Usage

### API
https://documenter.getpostman.com/view/4805322/2sA3kYjfir#baf83008-aa79-43e1-9f06-fedc511da999
### Web Interface
1. Start a local PHP server:
    ```shell
    php -S localhost:9090
    ```

2. Open your browser and navigate to `http://localhost:9090`.

### Telegram Bot
1. Set up your Telegram bot by creating a new bot on Telegram and obtaining the bot token.

2. Update the bot token in `src/Bot.php`:
    ```php:src/Bot.php
    startLine: 1
    endLine: 10
    ```

3. Set up a webhook for your bot to point to your server's endpoint.

___

## Contributing
Feel free to submit issues or pull requests. For major changes, please open an issue first to discuss what you would like to change.

## License
This project is licensed under the MIT License.# note-app-competition
