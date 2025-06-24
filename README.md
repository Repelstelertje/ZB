# Zoekertjes België (ZB)

Zoekertjes België is a small PHP/Vue application for displaying dating adverts. The layout is based on the **Start Bootstrap Heroic Features** template and relies on a remote API for profile data.

## Prerequisites

* PHP 7 or higher
* [Node.js](https://nodejs.org/) and npm

## Installation

1. Install Node dependencies:

   ```bash
   npm install
   ```

2. Build the vendor assets (Bootstrap and jQuery):

   ```bash
   npx gulp build
   ```

   For development with automatic reloads you can run:

   ```bash
   npm start
   ```

## Serving the site

The project contains PHP files so you need a PHP capable webserver for local testing. The simplest approach is the built‑in PHP server:

```bash
php -S localhost:8000
```

Point your browser to [http://localhost:8000](http://localhost:8000) to view the site.

`gulp watch` (used in `npm start`) serves the site via BrowserSync on port 3000. This is convenient for pure HTML/JS development but does not interpret PHP code.

The webserver should rewrite friendly URLs to their PHP counterparts. The
provided `.htaccess` maps requests of the form `dating-<slug>` to
`provincie.php?item=<slug>` and `datingtips-<slug>` to
`datingtips.php?item=<slug>`:

```
RewriteRule ^dating-([a-z-]+)/?$ provincie.php?item=$1 [NC,L]
RewriteRule ^datingtips-([a-z-]+)/?$ datingtips.php?item=$1 [NC,L]
```
Ensure an equivalent rule exists if you use a different server.

## PHP and JavaScript

The frontend uses Vue.js with Axios to fetch dating profiles from a remote API. The API base URL can be configured via the `BASE_API_URL` environment variable and defaults to `https://20fhbe2020.be`. Endpoints are defined in `includes/config.php` and included where needed so the strings aren't duplicated. The PHP files mainly generate the HTML structure (header, navigation and footer) and provide dynamic meta tags.

PHP error display is disabled by default. Set the `APP_DEBUG` environment variable to `true` when developing to enable verbose error output.

The optional `REF_ID` environment variable can be used to append a referral identifier to profile links on the profile page.

## License and attribution

This project is released under the MIT License. The layout originates from the [Start Bootstrap Heroic Features](https://github.com/BlackrockDigital/startbootstrap-heroic-features) template.

