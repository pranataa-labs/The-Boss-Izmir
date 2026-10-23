# ☕ The Boss Hookah & Lounge - Web Application

A luxurious, dark-themed, and highly responsive web application built for **The Boss Hookah & Lounge**, a premium cafe and lounge located in Bornova, İzmir. This project features an elegant public-facing landing page and a powerful, fully-localized (Turkish) Admin Panel for content management.

---

## 🚀 Technology Stack

* **Backend:** Laravel 13 (PHP 8.2+)
* **Admin Panel:** FilamentPHP v3
* **Frontend:** Tailwind CSS v3, Alpine.js, Blade Components
* **Media Management:** Spatie Media Library
* **Database:** MySQL / SQLite

---

## ✨ Key Features

* **Luxurious UI/UX:** Dark theme (`#050505`) with elegant gold (`#c59d5f`) accents, smooth scroll transitions, and glassmorphism effects.
* **Responsive Design:** Fully optimized for Mobile, Tablet, and Desktop displays with precise viewport scaling.
* **Dynamic Menu System:** Categorized menu items (Kahveler, Nargile, Tatlılar, etc.) with prices, descriptions, and high-quality image support.
* **Photo Gallery:** Symmetrical responsive grid (`aspect-[4/5]`) for interior and atmosphere showcases.
* **Dynamic Settings:** Global settings management (Hero Images, Contact Info, Google Maps URL, Social Links) easily editable via the Admin Panel.
* **Turkish Admin Panel:** 100% localized Filament Admin interface tailored for local staff operations.

---

## 🛠️ Local Installation & Setup Guide

Follow these steps to run the project on your local machine:

### 1. Repository Cloning
```bash
git clone https://github.com/pranataa-labs/The-Boss-Izmir.git
cd The-Boss-Izmir
```

### 2. Dependency Installation
```bash
composer install
npm install
```

### 3. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```
*Configure your database credentials in the `.env` file.*

### 4. Database Migration & Seeding
```bash
php artisan migrate --seed
```

### 5. Symbolic Storage Link
```bash
php artisan storage:link
```

### 6. Build Assets & Serve Application
```bash
npm run build
php artisan serve
```

---

## 🔐 Administrative Access

- **Path:** `http://localhost:8000/admin`
- **Default Account:** Configured via `DatabaseSeeder.php`

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).
