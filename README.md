
# Contact Management Laravel

This is a contact management application built using Laravel. It provides basic functionality for creating, viewing, updating, and deleting contacts, as well as user authentication. The application is designed to help manage contacts, including name, contact number, and email.

## Installation

Follow these steps to install and set up the Contact Management Laravel project on your local machine:

### 1. Clone the repository

First, clone this repository to your local machine:

```bash
git clone https://github.com/PedroSMelo/contact-management-laravel.git
```

### 2. Install Dependencies

Navigate to the project directory:

```bash
cd contact-management-laravel
```

Then, install the project dependencies using Composer:

```bash
composer install
```

Also, install the front-end dependencies:

```bash
npm install
```

### 3. Configure Environment Variables

You need to set up the `.env` file with your local configuration. If the `.env` file is not already present, you can copy the example configuration:


```bash
cp .env.example .env
```

### 4. Database Configuration

The credentials to access the database were provided to you via email. These credentials are confidential and should never be included in version control or publicly accessible files.

In the `.env` file, configure the database connection details. For MySQL, you can use the following settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contact_management
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application Key

Generate the application key using Artisan:

```bash
php artisan key:generate
```

### 6. Run Migrations

To set up the database schema, run the migrations:

```bash
php artisan migrate
```

This will create the necessary tables for the contacts and user authentication.

## Usage

### 1. Start the Development Server

Run the following command to start the Laravel development server:

```bash
php artisan serve
```

The server will start at `http://localhost:8000`. You can now access the application in your browser.

### 2. Accessing the Application

- Go to `http://localhost:8000` to access the homepage.
- Log in or register using the default Laravel authentication system.
- Once logged in, you'll have access to the contacts management section.

## Routes

Below is a list of routes available in the application:

- `GET /contacts`: Displays all contacts.
- `GET /contacts/create`: Displays the form to create a new contact.
- `POST /contacts`: Stores a new contact in the database.
- `GET /contacts/{id}`: Displays a specific contact.
- `GET /contacts/{id}/edit`: Displays the form to edit a contact.
- `PUT /contacts/{id}`: Updates an existing contact.
- `DELETE /contacts/{id}`: Deletes a contact from the database.

## Authentication

The application uses Laravel's built-in authentication system. You can register and log in to manage contacts.

### 1. Register

To register a new user, go to the `/register` page and fill in the required details.

### 2. Login

After registering, you can log in via the `/login` page. Enter your credentials to access the dashboard.

### 3. Logout

To log out, click the "Logout" button in the navigation bar. This will end your session and return you to the homepage.

## Git Workflow

The following steps outline the Git workflow for this project:

### 1. Cloning the Repository

```bash
git clone https://github.com/PedroSMelo/contact-management-laravel.git
```

### 2. Create a New Branch

Before making any changes, create a new branch for your feature or fix:

```bash
git checkout -b <branch-name>
```

### 3. Stage and Commit Changes

After making changes, stage them for commit:

```bash
git add .
```

Then, commit your changes with a descriptive message:

```bash
git commit -m "Description of changes made"
```

### 4. Push Changes

Push your branch to the remote repository:

```bash
git push origin <branch-name>
```

### 5. Create a Pull Request

Once your changes are pushed, create a pull request on GitHub to merge your branch into the `master` branch.

## Contributing

If you would like to contribute to this project, follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b <branch-name>`).
3. Make your changes.
4. Commit your changes (`git commit -m "Description of your changes"`).
5. Push your branch to your forked repository.
6. Open a pull request on GitHub.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgements

- Laravel framework
- Bootstrap for styling
- GitHub for hosting the project
