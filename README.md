# Tangle Wizard

A general-purpose, self-installing e-commerce platform written in plain PHP + MySQL. It was my bachelor's final-year project at **UMT (University of Management and Technology), Lahore**, built between 2014 and 2016. I was teaching myself web development at the time.

The idea was simple and a bit ambitious: not *a* shop, but the thing anyone could upload to their hosting, run an installer on, and turn into *their* shop. That covers products, categories, pages, SEO, orders, customers, a newsletter, and online payments.

> **This is an archive, preserved as it was.** It is 2015-era PHP and is **not safe to run on the public internet** (see [Known issues](#known-issues)). The story behind it is in [HISTORY.md](HISTORY.md).

## What's in it

| Area | Where | What it does |
|---|---|---|
| Installer | `installation/` | Collects DB credentials, writes `config/config.php`, creates the schema under a configurable table prefix, sets up the site and first admin. `index.php` redirects here while the config is empty. |
| Storefront | `index.php` → `website.php` | Front controller via `.htaccess`. `controller/setup.php` parses the URL into a page, and `view/view.php` includes the matching `model/` file. Any unknown slug is looked up as a product permalink. |
| Admin panel | `admin/` | Same controller/model/view layout. Products, categories and sub-categories, pages, SEO, site options, orders, customers, messages, subscribers, payment credentials. |
| Form handling | `processor.php` | One dispatcher that routes admin and login form posts by submit-button name. |
| Content model | `node` + `node_meta` tables | A product is a generic node plus metadata (permalink, category, price, quantity), so the model can hold other content types too. |
| Cart | `cart.php` | Cookie-based cart (`id,qty-id,qty`). |
| Payments | `paypal.php`, `authorize.php`, `card.php` | PayPal Standard (auto-submitted form) and Authorize.Net AIM (sandbox) via the vendored `sdk-php-master`. Credentials are entered by the store owner in the admin, not hard-coded. |
| Auth | `functions/login.php` | Salted SHA-256, 65,536 rounds, with session regeneration on login. |

Front-end: a Metronic shop theme for the storefront and the Charisma Bootstrap admin theme, plus CKEditor and Roxy Fileman for content editing. All of these are vendored as they were.

## Running it locally (for nostalgia)

You need PHP with `mysqli`, MySQL/MariaDB, and Apache with `mod_rewrite` (or any server that routes unknown paths to `index.php`). PHP 5.x behaves the way it did in 2015. Newer PHP will show notices and may break in places (e.g. `utf8_decode` is deprecated in PHP 8.2).

1. Serve the directory from the web root with `.htaccess` enabled.
2. Create an empty database.
3. Visit the site. With an empty `config/config.php` you'll be sent to the installer.

## Known issues

This is left unfixed on purpose, as a record of where I was at the time:

- SQL is built by string concatenation, protected only by `addslashes()` and sometimes not even that.
- Output isn't escaped (XSS), and there's no CSRF protection.
- Some admin endpoints (`confirmorder.php`, `deleteorder.php`, admin branches of `processor.php`) don't check the session.
- Checkout trusts the client-posted total, and `success.php` decrements stock without verifying payment.
- `config/config.php` must be writable by the web server.

The one change from the original files: a Twitter plugin (`plugins/twitter/index.php`) had API credentials hard-coded. Those were replaced with placeholders before publishing.
