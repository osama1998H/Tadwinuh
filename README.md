

# Tadwinuh Project Setup Guide

This guide will help you set up your Tadwinuh project with an SQLite database.

## Step 1: Generate `.env` File

You need to create a `.env` file if it doesn't already exist. You can do this by copying the `.env.example` file and renaming it to `.env`.

## Step 2: Configure the Database in `.env`

Open the `.env` file in a text editor and locate the following section:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

Replace the values as follows:

```env
DB_CONNECTION=sqlite
DB_DATABASE=/full/path/to/your/database.sqlite
```

Make sure to replace `/full/path/to/your/database.sqlite` with the actual full path to your `database.sqlite` file. This sets up SQLite as your database driver.

## Step 3: Create the SQLite Database

In your project's root directory, create a new `database` directory if it doesn't already exist. Inside the `database` directory, create an empty file named `database.sqlite`. This will be your SQLite database file.

## Step 4: Run Migrations and Seed

Open a terminal in your project's root directory and run the following command to migrate the database and seed it with initial data:

```bash
php artisan migrate:fresh --seed
```

This command will create the necessary tables and populate them with seed data.

## Step 5: Start the Tadwinuh Development Server

Finally, start the Laravel development server by running the following command:

```bash
php artisan serve
```

Your Tadwinuh application will be available at the provided URL (usually `http://localhost:8000` by default).

That's it! Your Laravel project is now set up with an SQLite database, and you're ready to start developing.

