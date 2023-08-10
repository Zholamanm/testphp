# testphp
# Contact Management System

This project is a simple contact management system built using PHP and MySQL. It allows you to add and delete contacts and displays a list of existing contacts.

## Features

- Add a new contact with name and phone number.
- Delete existing contacts.
- Display a list of contacts.

## Getting Started

1. Clone this repository to your local machine.
2. Configure your database settings in `db.php` file.
3. Import the provided SQL dump (`contacts.sql`) to set up the database structure.
4. Open the project directory in a web server environment (such as Apache).
5. Access `index.php` in your browser to interact with the contact management system.

## Files and Directory Structure

- `index.php`: Main page that displays the list of contacts and the form to add new contacts.
- `db.php`: Database connection script. Configure your database credentials here.
- `db/insert.php`: Handles inserting new contacts into the database.
- `db/delete.php`: Handles deleting contacts from the database.
- `css/style.css`: Stylesheet for the project.
- `icons/delete.svg`: Delete icon image.
- `contacts.sql`: SQL dump file for creating the required database table.

## Requirements

- PHP 7.x or higher
- MySQL or MariaDB

## Contributions

Contributions are welcome! If you find any issues or want to enhance the project, feel free to open a pull request.
