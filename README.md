# 🛒 Laravel Livewire E-Commerce

A modern, reactive e-commerce platform built with **Laravel 12**, **Livewire 3**, and **Volt**, focused on developer experience, performance, and extensibility.

---

## 🚀 Overview

This project is a full-featured e-commerce application that combines **Laravel's backend power** with **Livewire's reactivity** and **Volt's simplicity**, delivering a **SPA-like experience** without relying on a heavy JavaScript framework.

---

## 🧩 Key Features

* ⚡ **Reactive UI Components** with Livewire 3.6+, Volt 1.7.1, and Flux 2.1.5
* 🔐 **Role-Based Access Control** using Spatie Laravel Permission 6.18
* 🛠️ **Advanced Debugging Tools** with Laravel Telescope 5.7
* 🧪 **Static Analysis & Refactoring** via PHPStan (level 10), Larastan, ECS, and Rector
* 🎯 **Error Monitoring** with Sentry 4.13 integration
* 🎨 **Modern Styling** with Tailwind CSS 3+
* 🧰 **Developer Workflow** powered by Docker (Laravel Sail), Redis, and CaptainHook

---

## 🛠️ Tech Stack

* **Language**: PHP 8.4
* **Framework**: Laravel 12.10
* **Frontend**: Livewire + Volt + Tailwind CSS
* **Database**: MySQL 8.0
* **Caching & Queues**: Redis
* **Environment**: Laravel Sail (Docker)

---

## 📦 Architecture

The app follows Laravel's MVC pattern enhanced with:

* 🧱 **Component-based UI** with Volt & Livewire
* 🔐 **RBAC** using Spatie's roles & permissions
* 🧠 **Session-based authentication** (Breeze Volt stack)
* 🔍 **Monitoring** via Telescope (local) and Sentry (prod)
* ⚙️ **Dockerized services** for easy onboarding and consistent environments

---

## 🚀 Getting Started

### 🔧 Prerequisites

* Docker + Docker Compose
* PHP 8.4 (if running outside Sail)
* Composer
* Node.js + npm

### 📥 Installation

```bash
# Clone the repo
git clone https://github.com/fmalnero010/ecommerce-livewire.git
cd ecommerce-livewire

# Install PHP dependencies
composer install

# In case you don't have composer, you can run the following command
docker run --rm \
-v $(pwd):/app \
-w /app \
laravelsail/php82-composer:latest \
composer install

# Start Docker services
./vendor/bin/sail up -d

# Run database migrations
./vendor/bin/sail artisan migrate

# Install and build frontend assets
npm install
npm run dev

# Access the app
http://localhost
```

---

## 🧪 Development & Code Quality

The project enforces high standards through:

### 🔍 Static Analysis & Linting

```bash
# PHPStan (level 10 + Larastan)
./vendor/bin/sail composer phpstan

# Rector refactoring
./vendor/bin/sail composer rector

# Easy Coding Standard
./vendor/bin/sail composer ecs

# Pint fixer
./vendor/bin/sail pint
```

### ✅ Testing (Pest)

```bash
./vendor/bin/sail test
```

---

## 🧑‍💻 Developer Utilities

* 🔄 **CaptainHook**: Pre-commit hooks for:

    * PHP lint
    * ECS auto-fix
    * Rector
    * Commit message validation (Conventional Commits + Beams)

* 🔍 **Laravel Telescope**: Visit [http://localhost/telescope](http://localhost/telescope)

* 📡 **Sentry**: Connected via `SENTRY_LARAVEL_DSN`

* 📊 **RedisInsight**: Monitor app sessions/cache/jobs visually at `http://localhost:5540`

* 📚 **Deepwiki**: Internal documentation system

* 🧠 **PlantUML**: Updated class diagrams (`/docs/uml/`)

---

## 👮 Permissions System

Uses Spatie Laravel Permission:

* Role-based middleware: `role:admin`, `role:customer`
* Direct permissions: `permission:create products`, `permission:delete orders`
* Fully cached and extendible

See [Permission System Wiki](/wiki/fmalnero010/ecommerce-livewire#4)

---

## 🧪 Useful Commands

```bash
# Start environment
./vendor/bin/sail up -d

# Run tests
./vendor/bin/sail test

# Run static analysis
./vendor/bin/sail composer phpstan

# Fix code style
./vendor/bin/sail composer ecs

# Dev services (queue, logs, vite)
./vendor/bin/sail composer dev
```

---

## 🤝 Contributing

```bash
git switch -c feat/nueva-funcionalidad
# commit siguiendo Conventional Commits
# ejemplo: feat(cart): agregar persistencia del carrito

git push origin feat/nueva-funcionalidad
```

Luego, abrí un Pull Request 🚀

---

## 📄 License

MIT License — see the `LICENSE` file for full details.

---

## 📚 Wiki Links

* [🧭 Overview](https://github.com/fmalnero010/ecommerce-livewire/wiki#overview)
* [🔐 Permission System](https://github.com/fmalnero010/ecommerce-livewire/wiki#permission-system)
* [⚙️ Dev Environment](https://github.com/fmalnero010/ecommerce-livewire/wiki#development-environment)

---

## ✨ Author

Made with ❤️ by [Facundo Malnero](https://github.com/fmalnero010)
