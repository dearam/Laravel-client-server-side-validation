# Laravel Form Validation Example

This repository contains an example implementation of a form with client-side and server-side validation using Laravel. The form allows users to enter their information, including first name, last name, phone number, address, date of birth, profile image, and email.

## Prerequisites

- PHP (>= 7.2)
- Composer
- Node.js (>= 12.0)
- Laravel (>= 8.0)
- Laravel Mix (>= 6.0)

## Installation

1. Clone the repository:

git clone https://github.com/your-username/your-repository.git


2. Navigate to the project directory:

cd your-repository

3. Install PHP dependencies:

composer install

4. Install JavaScript dependencies:

npm install

5. Compile assets:

npm run dev

6. Copy the `.env.example` file and rename it to `.env`. Update the database configuration and any other necessary environment variables:

cp .env.example .env

7. Generate an application key:

php artisan key:generate

8. Run database migrations:

php artisan migrate


## Usage

1. Start the development server:

php artisan serve

2. Access the application in your web browser:

http://localhost:8000


3. Fill out the form with the required information.

4. The form performs client-side validation to ensure the fields are filled out correctly.

5. Upon form submission, the server-side validation is triggered to validate the data.

## Customization

- You can modify the validation rules and error messages in the `app/Http/Controllers/FormController.php` file.

- Additional form fields or customizations can be made in the corresponding Blade view file located in the `resources/views` directory.

## Output

<img width="947" alt="Screenshot 2023-07-10 204730" src="https://github.com/dearam/newdearamportfolio/assets/80329368/793a1e14-4d8f-48ed-95f6-488d20c6a8c5">

<img width="947" alt="Screenshot 2023-07-10 204802" src="https://github.com/dearam/newdearamportfolio/assets/80329368/f3af5f61-340c-4a18-853d-618481c490bb">


## License

This project is licensed under the [MIT License](LICENSE).


