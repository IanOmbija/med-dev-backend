
# MedBook Dev Backend API

Welcome to the MedBook Dev Backend API! This API powers the backend functionality of the application, allowing you to manage patient records, and services

## Table of Contents

- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Configuration](#configuration)
- [Usage](#usage)
  - [Endpoints](#endpoints)
- [Contributing](#contributing)
- [Meta](#meta)

## Getting Started

### Prerequisites

Before you begin, make sure you have the following installed:

- PHP 7.3+
- Composer
- Laravel CLI
- MySQL or another supported database
- Postman

### Installation

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/IanOmbija/medbook-dev-backend.git
   cd medbook-dev-backend
   ```

2. Install the required dependencies using Composer:

   ```bash
   composer install
   ```

3. Create a copy of the `.env.example` file and name it `.env`. 
Update the database connection settings and other configurations as needed:

   ```bash
   cp .env.example .env
   ```

4. Generate an application key:

   ```bash
   php artisan key:generate
   ```

5. Run the database migrations to create the required tables:

   ```bash
   php artisan migrate
   ```


6. Run the database seeder to generate some dummy data to the tables:

   ```bash
   php artisan db:seed
   ```
7. Start the development server:

   ```bash
   php artisan serve
   ```

### Configuration

- API routes are defined in the `routes/api.php` file.
- You can adjust other application settings in the `.env` file.

## Usage

### Endpoints

## Sample Endpoints Created & Responses

### List Patients Created
Sample `request` sent to the endpoint

```http
GET  http://<yourlocalhosturl>/api/patients
```
The above endpoint allows the user to list the available patients


#### Success Response 200 OK
```json
[
    {
        "id": 1,
        "name": "Ann Liza",
        "date_of_birth": "1967-08-28",
        "gender_id": 2,
        "service_id": 2,
        "created_at": "2023-08-28T07:44:20.000000Z",
        "updated_at": "2023-08-28T07:44:20.000000Z",
        "comments": "Outpatient service | Headache treatment",
        "service_count": 0,
        "gender": {
            "id": 2,
            "name": "Female",
            "created_at": "2023-08-28T07:41:51.000000Z",
            "updated_at": "2023-08-28T07:41:51.000000Z"
        },
        "services": []
    },
    {
        "id": 2,
        "name": "Ian Ombija",
        "date_of_birth": "1985-08-21",
        "gender_id": 1,
        "service_id": 2,
        "created_at": "2023-08-28T07:55:58.000000Z",
        "updated_at": "2023-08-28T07:55:58.000000Z",
        "comments": "Inpatient",
        "service_count": 0,
        "gender": {
            "id": 1,
            "name": "Male",
            "created_at": "2023-08-28T07:41:51.000000Z",
            "updated_at": "2023-08-28T07:41:51.000000Z"
        },
        "services": []
    }
]
```
### Get the services available
Sample `request` sent to the endpoint

```http
GET  http://<yourlocalhosturl>/api/services
```
The above endpoint allows the user to see list of available services

#### Success Response 200 OK
```json
[
    {
        "id": 1,
        "name": "Outpatient",
        "created_at": "2023-08-28T07:41:51.000000Z",
        "updated_at": "2023-08-28T07:41:51.000000Z",
        "patients_count": 0
    },
    {
        "id": 2,
        "name": "Inpatient",
        "created_at": "2023-08-28T07:41:51.000000Z",
        "updated_at": "2023-08-28T07:41:51.000000Z",
        "patients_count": 0
    }
]
```
#



## Contributing

Contributions are welcome! If you find a bug or want to suggest an improvement, please open an issue or submit a pull request. Be sure to follow the existing coding style and guidelines.

## Meta

Developed by Ian Ombija

---

