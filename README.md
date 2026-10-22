# Ekstrasens Valeria — Marketing Landing Site

A single-language (Russian) promotional website for a personal consulting service: services, about us, reviews, contacts, hero slider and news section. Built as a lightweight Laravel site with hand-written CSS/JS rather than a CMS.

## Tech stack

| Layer | Technology |
|-------|------------|
| Language | PHP `^7.2` |
| Framework | Laravel **6.x** |
| Templating | Blade |
| Front-end | Custom CSS (normalize, Bootstrap base, animate.css, hover.css, WOW scroll animations), jQuery 3.2.0, Font Awesome, html5shiv for legacy IE |
| Analytics / SEO | Google Analytics (UA-152384896-1), generated `sitemap.xml`, robots.txt, meta tags |
| Database | Not used in practice — content lives in Blade templates; only stock Laravel migrations present |

## Features

- Static multi-page site with a hero slider and animated sections.
- **Validated contact form**: `app/Http/Requests/contactUSRequest.php` validates input, `MailController@send_form` renders `applyToEmail.blade.php` and sends the enquiry via SwiftMailer over the client's SMTP server.
- Scroll-triggered animations (WOW), hover effects, responsive layout (`media.css`).
- SEO plumbing: sitemap, robots.txt, per-page meta descriptions.

## Project structure

```
app/Http/Controllers/   MailController (contact form handling)
app/Http/Requests/      contactUSRequest (validation rules)
resources/views/        master, navbar, slider, index, services, features, flags,
                        ourTeam, contact, footer + pages/{Actualites, about-us, otzivi, contact-us}
css/ js/ images/        hand-written front-end assets and media
routes/web.php          static routes ('/', 'uslugi', 'o-nas', 'otzivi', 'contact-us')
```

## Getting started locally

```bash
composer install
cp .env.example .env     # set your own SMTP values; never commit real credentials
php artisan key:generate
php artisan serve
```

## Development timeline (estimated)

Laravel 6.0 was released in October 2019 and the sitemap's `lastmod` is **1 November 2019**, so the site went live around **late 2019**. All file timestamps are 25 November 2019, which reflects a copy operation rather than the original development date. Confidence: medium.

## Notes & limitations

- No database-backed content management — editing text requires code changes (a deliberate scope decision for this small site).
- Legacy Google Analytics (Universal Analytics) property is referenced; it has since been deprecated by Google.

## Screenshots

Captured locally by running the app in Docker (PHP 7.4 + MySQL 5.7), see [portfolio/local-run](https://github.com/bandarsiri2026/portfolio#run-any-project-locally).

![Landing page with slider, services and contact blocks(screenshots/ekstrasens-home.png)

*Landing page with slider, services and contact blocks*

## License

MIT — see [LICENSE](LICENSE). The code is released under MIT; third-party assets (client product photos, fonts, brand imagery) are not covered by this license and belong to their respective owners.
