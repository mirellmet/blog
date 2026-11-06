# Laravel Blog

This is my Laravel blog project. It allows users to create, edit and delete blog posts, add comments, manage tags and upload images.

## Requirements

Install the following programs before starting:

- Visual Studio Code
- Git
- PHP
- Composer
- Bun

Make sure PHP and Composer are available in your terminal.

## PHP Configuration

Open your `php.ini` file and enable the following PHP extensions:

- fileinfo
- mbstring
- openssl
- pdo_sqlite
- sqlite3
- tokenizer
- xml
- ctype

To enable an extension, remove the semicolon (`;`) before its extension line.

Check your PHP configuration:

```bash
php --ini
```

Check installed PHP extensions:

```bash
php -m
```

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/mirellmet/blog.git
cd blog
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install frontend dependencies

```bash
bun install
```

### 4. Configure the environment

Copy the example environment file:

```bash
cp .env.example .env
```

On Windows Command Prompt, use:

```cmd
copy .env.example .env
```

Open `.env` and configure the database settings.

For SQLite, use:

```env
DB_CONNECTION=sqlite
```

### 5. Generate the application key

```bash
php artisan key:generate
```

### 6. Run database migrations

```bash
php artisan migrate
```

If SQLite is used, make sure the database file exists at `database/database.sqlite`.

### 7. Start the development server

```bash
composer run dev
```

### 8. Open the application

Open the following address in your browser:

http://localhost:8000

The Laravel blog should now be running.

## Technologies Used

- Laravel
- PHP
- SQLite
- Tailwind CSS
- Blade Templates
- Bun