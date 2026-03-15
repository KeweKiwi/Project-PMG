# Repository Guidelines

## Project Structure & Module Organization
This repository is a Laravel 12 application with a Vite frontend. Core PHP code lives in `app/`, HTTP routes in `routes/web.php`, Blade views in `resources/views`, frontend entry files in `resources/js` and `resources/css`, and public build output in `public/build`. Database migrations, factories, and seeders live under `database/`. Tests are split into `tests/Feature` and `tests/Unit`.

## Build, Test, and Development Commands
Install PHP dependencies with `composer install` and frontend dependencies with `npm install`.

- `composer dev`: runs the local Laravel server, queue listener, and Vite dev server together.
- `npm run dev`: starts only the Vite asset watcher.
- `npm run build`: creates a production frontend build in `public/build`.
- `composer test`: clears config cache and runs the full test suite.
- `php artisan migrate`: applies database migrations.
- `./vendor/bin/pint`: formats PHP code to Laravel standards.

## Coding Style & Naming Conventions
Follow PSR-12/Laravel conventions for PHP: 4-space indentation, PascalCase class names, camelCase methods, and singular model names. Keep controllers in `app/Http/Controllers` and match route names to page intent, for example `portfolio.category` or `contact.store`. Blade templates should use descriptive lowercase names such as `home.blade.php`. Keep frontend changes consistent with the existing Tailwind-first approach in Blade views.

## Testing Guidelines
Tests run with Pest on top of Laravel’s test framework. Add request and page-flow coverage to `tests/Feature`; place isolated logic tests in `tests/Unit`. Name test files with the `*Test.php` suffix. Run `composer test` before opening a PR, and add or update tests for route, controller, validation, or database behavior changes.

## Commit & Pull Request Guidelines
Recent commits use short, direct summaries, sometimes mixing English and Indonesian, for example `add animation and tambahin timeline process`. Keep commits focused and written in imperative mood. For pull requests, include a brief description, note any route or UI changes, link related issues when available, and attach screenshots for Blade or styling updates.

## Security & Configuration Tips
Do not commit `.env` or real credentials. Use `.env.example` as the template for local setup. When changing forms or request handling, verify validation, CSRF protection, and mail or queue configuration before merging.
