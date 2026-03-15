# Project Guidelines

## Code Style
- Use Laravel 12 conventions with PSR-4 namespaces under `App\\`.
- Keep controller methods small and return Blade views with `compact(...)` where practical.
- Prefer request validation through `$request->validate(...)` or `Validator::make(...)` before processing input.
- Follow existing PHP style and run Pint for formatting changes.

## Architecture
- Backend is a Laravel MVC app.
- Routes are defined in `routes/web.php` and map directly to controller methods in `app/Http/Controllers/`.
- Current business/content data is mostly static arrays inside controllers (for example home, portfolio, about, contact) rather than database models.
- Views live in `resources/views/` and are Blade templates.

## Build and Test
- Install dependencies:
  - `composer install`
  - `npm install`
- Initial app setup:
  - `cp .env.example .env` (if `.env` does not exist)
  - `php artisan key:generate`
  - `php artisan migrate`
- Main development workflow:
  - `composer dev` (runs Laravel server, queue listener, and Vite concurrently)
- Alternative individual commands:
  - `php artisan serve`
  - `npm run dev`
- Tests:
  - `composer test`
  - `php artisan test`
- Frontend production build:
  - `npm run build`
- Code formatting:
  - `./vendor/bin/pint`

## Conventions
- Keep route names stable (`home`, `portfolio`, `portfolio.category`, `about`, `services`, `contact`, `contact.store`, `consultation.book`) unless refactoring all call sites.
- Portfolio/category filtering is implemented in controller logic; preserve case-insensitive matching behavior.
- When adding new controller actions, ensure matching view files exist under `resources/views/`.
- Prefer extending existing data shapes in controllers (keys like `id`, `title`, `category`, `image`, `description`) to avoid Blade breakage.

## Known Pitfalls
- Several controllers currently return views that are not present in the repository (for example `portfolio.index`, `about.index`, `contact.index`). If you touch related routes/controllers, create/update the corresponding Blade files.
- Default queue/cache/session drivers rely on configured backends; local testing is set to in-memory/array in `phpunit.xml`.
- Frontend in `home.blade.php` uses CDN Tailwind and external font CDNs; keep this in mind before assuming all styling comes from Vite assets.
