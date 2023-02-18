
# Pharmacy Management

A web-based application built with Laravel, a PHP framework, and Bootstrap, a CSS framework, to help manage a pharmacy's inventory, sales, and customers. The application allows pharmacists to manage their stock, track sales, and keep track of their customers' prescriptions.



## Features

- Clean and responsive design
- User authentication and authorization
- Dashboard with key metrics and reports
- Inventory management with alerts for low stock
- Sales tracking and reporting
- Customer management with prescription history

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

## Prerequisites

You will need to have `Composer` installed on your machine in order to run this project. You can check if you have these installed by running the following commands in your terminal:
```bash
  composer -v

```

## Installation

1. Clone this repository to your local machine


```bash
  git clone https://github.com/DexTer-9/pharmacy-managment.git
```

2. Navigate to the project directory:

```bash
  cd pharmacy-management

```
3. Install the required packages:

```bash
  composer install

```
4. Copy the `.env.example` file to `.env` and configure your database settings

```bash
  cp .env.example .env

```
5. Generate an application key:

```bash
  php artisan key:generate

```
6. Run the migrations:

```bash
  php artisan migrate

```
7. Run the storage ( to create `public/images` folder for save the Product images ):

```bash
  php artisan storage:link

```
8. Seed the database:

```bash
  php artisan db:seed

```
9. Start the development server:

```bash
  php artisan serve

```
This will start a local development server and you can view the project in your browser at `http://localhost:8000`.


## Built With

- [Laravel ](https://laravel.com/) :  PHP framework
- [Bootstrap](https://getbootstrap.com/) : CSS framework for styling


## Authors

- [@Mohamed Abrar](https://www.github.com/DexTer-9)


## Contributions

If you would like to contribute to this project, please create a pull request with a detailed description of your changes. Your contributions are greatly appreciated!

