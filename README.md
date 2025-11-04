<div align="center">

# 🚗 **Rental Mobil — Laravel + Filament Admin Dashboard**

![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Filament](https://img.shields.io/badge/Filament-3.x-6C63FF?style=for-the-badge&logo=data:image/svg+xml;base64,PHN2ZyBmaWxsPSJ3aGl0ZSIgdmlld0JveD0iMCAwIDI1NiAyNTYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTk1LjM0IDI1Mi4wOThjLTE2LjIxMiAwLTI2LjA2LTYuMTY3LTMxLjg5My0xMi4zNTgtNy45MjQtOC40NDItMTAuOTg5LTE5LjA3Ni0xMC45ODktMjguMzY3IDAtNy4zOTUgMS43ODItMTMuODk2IDUuMzUyLTE4Ljc1MiAzLjcwNi00Ljg1NiA4Ljk4LTEwLjI4OCAxNi43MjEtMTUuMTk5TDgwLjUgMTUxYy0xNC4wNy0xNS42Mi0yMC44ODMtMzUuMzktMjAuODgzLTUzLjg0MSAwLTI1LjUwMyAxMy43OTEtNDMuMDcgMjYuNzM4LTUzLjA1NyAxMi45NDctMTAuMDA2IDI5LjI0Ny0xNS4wMiA0NS42NzYtMTUuMDIgMjYuOTM1IDAgNTAuOTUgMTAuNTM3IDY1LjM5NSAyOC4wODZsLjIxNi4yNjggLTE5LjQ0OCAyOC4zMzktLjE2NS0uMjE1Yy04LjkyMS0xMS40MjItMjIuMjkxLTE4LjQ3Ni0zNy4xODctMTguNDc2LTEyLjE0MyAwLTIzLjM3MyAzLjQ3Ny0zMS4wOTYgOS42OTctNy43MiA2LjIxOC0xMC4zNjYgMTMuNjU3LTEwLjM2NiAyMi42NzYgMCAxMC42NDUgNC45ODcgMTkuNTUyIDE0LjYzOCAyOC45NzdMMTIwLjQ3IDIzNS4xYzEuNTUyIDEuNzggMy4zNDMgNC43NTYgMy4zNDMgOC44MyAwIDQuMTM4LTEuODQgNy4xNjYtMy4zMjIgOC45MTQtMi41OTUgMy4xOTUtOS4wOTUgOC4zOTUtMjUuMTQxIDguMzk1ek0xMzUuMjM2IDE2OC4wMDZsLTIxLjExLTE4LjQ2Mi45NTItMS4xMTNjOC45Mi0xMC40OTMgMTIuODQ3LTIyLjM5MiAxMi44NDctMzUuOTcyIDAtMjIuNjItMTEuMTYzLTM5LjE1LTI5LjM4Mi00My42NTktMTMuMDM1LTMuMTg5LTI2LjE1LTQuODA1LTM5Ljg4Ny00LjgwNS0xNS42NjYgMC0zMS43MTEgMS43MzYtNDEuMjcgNC41NzFsNi44NyAzMS4yNjYtLjQyMi4wODZjLTMuNjggLS4zNTctNy41NjMtLjUyMi0xMS42OC0uNTIyaC0uMTkzYy0xNy4xNTggMC0yNi44NzggOC4wODItMjYuODc4IDIyLjM2NyAwIDE1LjE4IDExLjg4NyAyOC44OTYgMjUuMzI1IDQwLjQzNWwzMi4yNiAyOC4yMjUtLjA3OC4wODRjLTMuMjYgMy40NTUtNi4yOTggNy40NDMtOC45OTMgMTEuOTY2bC0uMTcuMjk3IDIzLjMyOCAyMC4zOTggLjEyMi0uMTY3YzEwLjQ3Mi0xMy43MyAyMC4wOTMtMjguMDg1IDI4LjcyMy00My4xMjd6Ii8+PC9zdmc+)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-00758F?style=for-the-badge&logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/license-MIT-brightgreen?style=for-the-badge)

A **modern car rental management system** built with **Laravel 11**, powered by a **Filament 3 Admin Dashboard**, and designed using **TailwindCSS** for a clean and responsive UI.

</div>
## 🚗 Rental Mobil — Laravel + Filament Admin

A modern car rental management system built with Laravel and a Filament admin dashboard. This README covers how to get the project running locally (Windows PowerShell), run tests, and common troubleshooting steps.

## Quick links

- Project root: `c:\project\rental-mobil\rental`
- PHP: 8.2+ (see composer.json)
- Framework: Laravel
- Admin: Filament

## Contents

- Features
- Tech stack
- Quick start (Windows PowerShell)
- Running tests
- Useful artisan commands & troubleshooting

## Features

- User & Admin Authentication
- Filament Dashboard (admin resources & pages)
- Car CRUD Management
- Booking system (user + admin flows)
- Financial export (CSV/Excel)
- Responsive UI with Tailwind CSS

## Tech stack

- Backend: PHP (Laravel)
- Admin UI: Filament
- Frontend: Blade + Tailwind CSS
- Database: MySQL (or any DB supported by Laravel)
- Testing: PHPUnit / Laravel's test helpers

## Quick start (Windows PowerShell)

Open PowerShell in the project folder and run the commands below.

1) Clone & install

```powershell
git clone https://github.com/161-Arfin/rental-mobil.git
cd rental-mobil\rental
composer install --no-interaction --prefer-dist
npm install
npm run build
```

2) Environment

```powershell
copy .env.example .env
php artisan key:generate
```

Edit `.env` and set your `DB_` values (MySQL credentials). If using SQLite for tests, update `DB_CONNECTION` accordingly.

3) Database

```powershell
php artisan migrate --seed
```

4) Run the app

```powershell
php artisan serve --port=8000
# then open http://127.0.0.1:8000
```

## Running tests

Use the Laravel test runner (recommended):

```powershell
php artisan test
```

Or run PHPUnit directly if needed:

```powershell
./vendor/bin/phpunit --filter EmailVerificationTest
```

If a test produces an HTTP 500, check the application log at `storage/logs/laravel.log` for the full exception and stack trace.

## Useful artisan commands

- Clear application cache:

```powershell
php artisan cache:clear
php artisan route:clear
php artisan config:clear
php artisan view:clear
```

- Recreate optimized config & route caches (do this in production only):

```powershell
php artisan config:cache
php artisan route:cache
```

## Troubleshooting tips

- Blade compile/view errors: delete `storage/framework/views/*` and run `php artisan view:clear`.
- If a test or page shows "Route [xyz] not defined": make sure the route exists in `routes/*.php` and that cached routes are cleared.
- If a Blade file shows "Undefined constant \"request\"": ensure you use `request()` (function) not bare `request` in Blade, or use the `Request` facade correctly.

## Contributing

Feel free to open issues or PRs. For code style follow PSR-12 and keep changes small and focused.

## License

MIT




