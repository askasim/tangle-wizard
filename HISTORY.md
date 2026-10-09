# History

Notes on where Tangle Wizard came from, pieced together in 2026 from file timestamps, server logs and the code itself.

## Context

- **Who:** me, a self-taught student doing my bachelor's at **UMT (University of Management and Technology), Lahore**.
- **What:** my final-year project. I wanted a *general-purpose* e-commerce platform that anyone could install and run as their own store, in the spirit of WordPress/WooCommerce, rather than a single hard-coded shop.
- **When:** 2014–2016.
- **Tools:** PHP, MySQL, Bootstrap/jQuery, and Aptana Studio (the `.project` file is still here). No framework and no Composer for my own code. Everything, including the router, was written by hand.

## Timeline

Reconstructed from file modification times and logs, so treat the dates as approximate.

| When | What |
|---|---|
| **Dec 2014** | Earliest of my own files: the installer's views (`installation/view/header.php`). |
| **Jan 2015** | The core takes shape: installer controller/model, admin panel models (users and so on), login/logout. Themes and libraries (Bootstrap, CKEditor, Fileman, and others) are pulled in. |
| **Mar 2015** | `index.php` gains the "empty config → go to installer" check, which makes the platform self-installing. |
| **29 Aug 2015** | First live deployment to `tanglewizard.com/blog` on shared hosting. The PHP error logs start that afternoon: the installer runs at ~17:00 UTC and the admin panel is in use by ~18:30. |
| **Aug–Sep 2015** | Storefront and commerce: cart cookie, checkout, user details, orders, newsletter, contact. |
| **3 Sep 2015** | Payments land: Authorize.Net card flow (`authorize.php`, `card.php`), PayPal (`paypal.php`), order confirmation and stock decrement (`success.php`). |
| **4 Oct 2015** | Last edits to the code. Same day, I ran `git init` inside `installation/functions/` (on Windows) and never made a commit. That empty repo was the only version control this project ever had, until now. |
| **2016** | Project completed and submitted. |
| **Oct 2026** | Put on GitHub as an archive, with these notes. |

## Design decisions I'm still proud of

- **Self-installing.** You upload it, open it, and an installer writes the config and builds the schema. Nothing is hard-coded to one store.
- **Table prefixes.** Several stores, or a store next to other apps, can share one database.
- **Store owner in control.** Site title, URL, slider, SEO, pages, categories and even payment-gateway credentials are managed from the admin panel, not by editing code.
- **Generic content model.** `node` + `node_meta` rather than a hard-wired `products` table.
- **A hand-rolled front controller.** `.htaccess` sends everything to `index.php`, which parses the path and dispatches. I worked out the same basic pattern frameworks use, without using one.
- **Real password hashing.** A per-user salt and 65,536 rounds of SHA-256, at a time when most tutorials were still teaching `md5($password)`.
- **Two payment gateways, aimed at an international store owner.** PayPal didn't support merchants in Pakistan, so this was always meant for anyone, anywhere.

## What I'd do differently now

The usual lessons, learned later: prepared statements instead of `addslashes()`, escaping every output, CSRF tokens, one central auth guard instead of per-page checks, never trusting a client-posted price, verifying payments server-side (PayPal IPN), and committing to git from day one.

## About this archive

- The first commit contains the files as they were, with an author date of **4 Oct 2015** (the last modification). The commit date is when it was uploaded.
- Left out: the IDE's `.idea/` folder, `.DS_Store` files, and the 2015 server `error_log` files, which contain hosting paths.
- Changed: hard-coded Twitter API credentials in `plugins/twitter/index.php` were replaced with placeholders.
- The empty 2015 `.git` folder in `installation/functions/` was removed so it wouldn't clash with this repository.
