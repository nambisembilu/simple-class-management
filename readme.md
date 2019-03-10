# Simple Class Management Software

Basic CRUD application for a school to manage its classes, teachers and students.

## Demo

You can view demo on this project in [Here](http://demo.patihnambi.com/simple-class-management/)
- **Username** : admin@kilk.co
- **Pass** : 1234567890 

## How To Install

Clone this project 
```
git clone
```

Go to your directory project 
```
cd simple-class-management
```

Update dependencies 
```
composer update
```

Editing file configuration 
 - rename .env.example **to** .env
 - create database based on .env file

Initialize data 
```
php artisan migrate --seed
```

## Features

__Admin__
 - Manage Class
 - Manage Teacher
 - Manage Student
 - Configure Seacher and Student inside Class

Create a basic CRUD application for a school to manage its classes, teachers and students.

## Notes

This project using [Cool Admin Template](https://github.com/puikinsh/CoolAdmin) 
