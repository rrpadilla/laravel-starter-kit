# Laravel Blade + Tailwind Starter Kit

Welcome! This starter kit is designed for Laravel 12 development using **Blade**, **TailwindCSS v4**, **Pest**, and strict QA tools.

---

## 👋 For Collaborators

This document is tailored for team members working on this project. Please **read carefully** and follow the workflow outlined below.

---

## ✅ Initial Setup

### 1. Clone the repository

```bash
git clone <your-repo-url>
cd <project-folder>
```

### 2. Install PHP & JS dependencies

```bash
composer install
npm ci
```

### 3. Environment setup

```bash
cp .env.example .env
php artisan key:generate
php artisan migrate
```

---

## 🚀 Development Commands

### Start everything (PHP, Vite, queue, logs):

```bash
composer dev
```

### Tailwind / JS changes live:

```bash
npm run dev
```

---

## ✅ Required Before Submitting Work

### Run full test and lint check:

```bash
composer test
```

This runs:

- ✅ Type coverage check (Pest)
- ✅ 100% test coverage (Pest)
- ✅ Typo detection (Peck)
- ✅ PHP formatting (Pint)
- ✅ JS formatting (Prettier)
- ✅ Static analysis (PHPStan)
- ✅ Refactor check (Rector dry-run)

### Just check formatting:

```bash
composer test:lint
```

---

## ⚠️ Rules for Contributors

- DO NOT push directly to `main`.
- DO NOT commit code with failing tests or formatting issues.
- DO NOT ignore `.env.example` or forget migrations.

---

## 📂 Key Project Structure

- `resources/views/` — Blade templates
- `resources/js/` — Alpine.js components
- `resources/css/` — Tailwind styles
- `app/Actions/` — Encapsulated logic
- `tests/` — Pest-based tests
- `.prettierrc.json`, `.pint.json`, `.phpstan.neon` — Code style configs

---

## 🧩 Tools Used

- **Pest** — Testing
- **PHPStan** — Static analysis
- **Peck** — Typo checking
- **Pint** — PHP code style
- **Prettier** — JS/Tailwind formatting
- **Rector** — Safe PHP upgrades
- **Pail** — Log viewer
- **Concurrently** — Multi-process dev loop

---

## 🤝 Thanks for contributing!

Stick to the process, and everything will be clean, tested, and production-ready 🚀
