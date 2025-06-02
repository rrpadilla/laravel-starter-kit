# Laravel Blade + Tailwind Starter Kit

A modern Laravel 12 starter kit powered by **Blade**, **Tailwind CSS v4**, **Vite**, **Pest**, and full-stack automation for clean, maintainable development.

---

## 🚀 Features

- **Laravel 12** with PHP 8.4
- **Blade** + **Alpine.js** for reactive UIs
- **Tailwind CSS v4** + Prettier integration
- **Vite** for fast frontend builds
- **Pest** for testing, with 100% type + coverage targets
- **Pint**, **Peck**, **Rector**, **Larastan** for code quality
- Full `dev` script with auto-serve, queue, logs, and Vite in sync

---

## 🛠 Installation

```bash
git clone <your-repo>
cd <project>
composer install
npm ci
cp .env.example .env
php artisan key:generate
php artisan migrate
```

---

## 💻 Local Development

```bash
composer dev
```

This runs:

- `php artisan serve`
- `php artisan queue:listen`
- `php artisan pail` (for logs)
- `npm run dev` (Vite + Tailwind)

All in parallel using `concurrently`.

---

## ✅ Testing & QA

```bash
composer test
```

Runs:

- ✅ Type coverage via Pest
- ✅ Unit tests with 100% coverage requirement
- ✅ Typo checking via Peck
- ✅ PHP formatting check via Pint
- ✅ JS formatting check via Prettier
- ✅ Static analysis with PHPStan
- ✅ Dry-run refactor with Rector

---

## 💅 Code Style

### PHP

```bash
composer lint        # Auto-fix with Pint + Prettier
composer test:lint   # Lint check only (no changes)
```

### Frontend

```bash
npm run lint         # Auto-fix Prettier (resources/)
npm run test:lint    # Check only
```

---

## 🧩 Project Structure

- `resources/views/` — Blade templates
- `resources/css/` — Tailwind styles
- `resources/js/` — Alpine.js components
- `routes/web.php` — App routes
- `tests/` — Pest tests (Feature, Unit)
- `app/Actions/` — Action-based logic
- `.prettierrc`, `.prettierignore` — Format rules

---

## 📦 Included Packages

### Backend (via `composer.json`)

- **Laravel 12**
- **Pest** — Modern PHP testing framework with Laravel integration
- **PHPStan** — Static analysis for catching bugs early
- **Peck** — Detects spelling/typos in codebase
- **Pint** — Laravel's official code style fixer
- **Rector** — Refactoring and PHP version upgrade assistant
- **Larastan** — PHPStan support for Laravel-specific logic
- **Pail** — Local Laravel log viewer in terminal
- **Faker**, **Mockery** — Test data and mocking

### Frontend (via `package.json`)

- **Tailwind CSS v4**
- **Prettier** with:
    - `prettier-plugin-tailwindcss`
    - `prettier-plugin-organize-imports`
- **Alpine.js** — Lightweight JavaScript interactivity
- **Axios** — Promise-based HTTP client
- **Vite** — Fast JS/CSS bundling
- **Concurrently** — Run dev scripts in parallel

---

## 🧪 CI Integration

Designed to work seamlessly with GitHub Actions:

```yaml
composer test # Used in CI to validate full code quality
```

---

## 📄 License

MIT — Free to use and modify.
