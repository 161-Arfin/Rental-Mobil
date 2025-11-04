<div align="center">

# 🚗 **Rental Mobil — Laravel + Filament Admin Dashboard**

![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Filament](https://img.shields.io/badge/Filament-3.x-6C63FF?style=for-the-badge&logo=data:image/svg+xml;base64,PHN2ZyBmaWxsPSJ3aGl0ZSIgdmlld0JveD0iMCAwIDI1NiAyNTYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTk1LjM0IDI1Mi4wOThjLTE2LjIxMiAwLTI2LjA2LTYuMTY3LTMxLjg5My0xMi4zNTgtNy45MjQtOC40NDItMTAuOTg5LTE5LjA3Ni0xMC45ODktMjguMzY3IDAtNy4zOTUgMS43ODItMTMuODk2IDUuMzUyLTE4Ljc1MiAzLjcwNi00Ljg1NiA4Ljk4LTEwLjI4OCAxNi43MjEtMTUuMTk5TDgwLjUgMTUxYy0xNC4wNy0xNS42Mi0yMC44ODMtMzUuMzktMjAuODgzLTUzLjg0MSAwLTI1LjUwMyAxMy43OTEtNDMuMDcgMjYuNzM4LTUzLjA1NyAxMi45NDctMTAuMDA2IDI5LjI0Ny0xNS4wMiA0NS42NzYtMTUuMDIgMjYuOTM1IDAgNTAuOTUgMTAuNTM3IDY1LjM5NSAyOC4wODZsLjIxNi4yNjggLTE5LjQ0OCAyOC4zMzktLjE2NS0uMjE1Yy04LjkyMS0xMS40MjItMjIuMjkxLTE4LjQ3Ni0zNy4xODctMTguNDc2LTEyLjE0MyAwLTIzLjM3MyAzLjQ3Ny0zMS4wOTYgOS42OTctNy43MiA2LjIxOC0xMC4zNjYgMTMuNjU3LTEwLjM2NiAyMi42NzYgMCAxMC42NDUgNC45ODcgMTkuNTUyIDE0LjYzOCAyOC45NzdMMTIwLjQ3IDIzNS4xYzEuNTUyIDEuNzggMy4zNDMgNC43NTYgMy4zNDMgOC44MyAwIDQuMTM4LTEuODQgNy4xNjYtMy4zMjIgOC45MTQtMi41OTUgMy4xOTUtOS4wOTUgOC4zOTUtMjUuMTQxIDguMzk1ek0xMzUuMjM2IDE2OC4wMDZsLTIxLjExLTE4LjQ2Mi45NTItMS4xMTNjOC45Mi0xMC40OTMgMTIuODQ3LTIyLjM5MiAxMi44NDctMzUuOTcyIDAtMjIuNjItMTEuMTYzLTM5LjE1LTI5LjM4Mi00My42NTktMTMuMDM1LTMuMTg5LTI2LjE1LTQuODA1LTM5Ljg4Ny00LjgwNS0xNS42NjYgMC0zMS43MTEgMS43MzYtNDEuMjcgNC41NzFsNi44NyAzMS4yNjYtLjQyMi4wODZjLTMuNjggLS4zNTctNy41NjMtLjUyMi0xMS42OC0uNTIyaC0uMTkzYy0xNy4xNTggMC0yNi44NzggOC4wODItMjYuODc4IDIyLjM2NyAwIDE1LjE4IDExLjg4NyAyOC44OTYgMjUuMzI1IDQwLjQzNWwzMi4yNiAyOC4yMjUtLjA3OC4wODRjLTMuMjYgMy40NTUtNi4yOTggNy40NDMtOC45OTMgMTEuOTY2bC0uMTcuMjk3IDIzLjMyOCAyMC4zOTggLjEyMi0uMTY3YzEwLjQ3Mi0xMy43MyAyMC4wOTMtMjguMDg1IDI4LjcyMy00My4xMjd6Ii8+PC9zdmc+)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-00758F?style=for-the-badge&logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/license-MIT-brightgreen?style=for-the-badge)

A **modern car rental management system** built with **Laravel 11**, powered by a **Filament 3 Admin Dashboard**, and designed using **TailwindCSS** for a clean and responsive UI.

</div>

---

## 🌟 **Features**

✅ User & Admin Authentication  
✅ Filament Dashboard  
✅ Car CRUD Management  
✅ Booking System (User & Admin Side)  
✅ Financial Report (Export PDF / CSV)  
✅ Dark / Light Mode Filament Theme  
✅ Responsive UI (TailwindCSS 3)  

---

## 🏗️ **Tech Stack**

| Layer | Technology |
|-------|-------------|
| **Frontend** | Tailwind CSS + Blade |
| **Backend** | Laravel 11 |
| **Admin Dashboard** | Filament v3 |
| **Database** | MySQL |
| **Testing** | Pest PHP |
| **Deployment** | Laravel Artisan / VPS / GitHub Pages |

---

## 🧭 **Folder Structure Overview**

```bash
rental-mobil/
│
├── app/
│   ├── Filament/              # Admin Pages & Resources
│   ├── Http/Controllers/      # App Controllers
│   └── Models/                # Database Models
│
├── database/
│   ├── migrations/            # Migration Files
│   └── seeders/               # Data Seeder Files
│
├── public/                    # Public Assets
├── resources/
│   ├── views/                 # Blade Templates
│   ├── css/                   # Tailwind Styles
│   └── js/                    # Optional JS
│
├── routes/
│   ├── web.php                # Web Routes
│   └── api.php                # API Routes
│
└── tests/                     # PestPHP Tests



## 📸 **Preview**

### 🏠 User Carspage
[User Carspage](https://github.com/user-attachments/assets/ac2539d7-3f9a-4e1b-ab20-86dd50e0d997)


### 🧭 Admin Dashboard
[Admin Dashboard](https://github.com/user-attachments/assets/7217052b-02d9-4eec-9053-ceef436b782c)





## ⚙️ **Installation Guide**

# 1️⃣ Clone the repository
git clone https://github.com/161-Arfin/rental-mobil.git
cd rental-mobil

# 2️⃣ Install dependencies
composer install
npm install && npm run build

# 3️⃣ Set up environment
cp .env.example .env
php artisan key:generate

# 4️⃣ Configure database
# Update DB credentials inside .env file

# 5️⃣ Run migrations & seeders
php artisan migrate --seed

# 6️⃣ Serve the application
php artisan serve