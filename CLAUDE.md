# Global Mothers United — Project Rules

This file documents permanent rules for working on this repository. These
rules apply to every future task, not just the one that introduced them.

## What this is

- This is a custom WordPress **classic theme** (PHP templates + a shared
  stylesheet), not a block theme and not a page-builder theme.
- Production site: https://globalmothersunited.com

## Branch and deployment safety

- `main` is the approved production source. **Never automatically merge
  into `main` or modify it directly.**
- All development happens on a separate branch (currently based on
  `redesign-round-1`). Confirm the current git branch before editing.
- Never deploy anything to WordPress from this environment. Changes are
  reviewed in WordPress (a staging install or theme preview) before any
  production activation.
- GitHub is the source of truth for this theme's code. Do not recommend
  editing production PHP or CSS through the WordPress Theme File Editor —
  changes made there are invisible to this repository and will be
  overwritten by the next deploy from GitHub.

## Content integrity

- Never invent statistics, partnerships, testimonials, event details, or
  program outcomes. If a number, date, or named organization is not
  already present in the repository, do not add one.
- Any existing factual claim that looks unverified (stats without a
  source, named partners, dated events) should be flagged for the client
  to confirm rather than edited or removed on assumption.

## Structure

- Shared header/navigation lives in `header.php`, shared footer in
  `footer.php`, shared styling in `assets/css/site.css` (enqueued via
  `wp_enqueue_style()` in `functions.php` — never hardcode a stylesheet
  `<link>` into a template). Shared JS lives in `assets/js/site.js`,
  enqueued via `wp_enqueue_script()`.
- Page templates (`front-page.php`, `page-*.php`, `index.php`) should call
  `get_header()` and `get_footer()` rather than re-declaring the
  `<head>`, nav, or footer markup inline.
- Shared header/footer/styles must not be duplicated between templates.
  If a new page template is added, it should reuse the existing shared
  files rather than copying markup or CSS from another template.

## Functionality that must keep working

- The Contact form (`page-contact.php` → `gmu_handle_contact()` in
  `functions.php`, action `gmu_contact`) and the Get Involved form
  (`page-get-involved.php` → `gmu_handle_join()`, action `gmu_join`) must
  remain functional: nonce field, honeypot field, `admin-post.php`
  submission, and the `wp_mail()` delivery to the site's Admin Email
  address.
- All design and layout changes must remain responsive — verify the
  existing breakpoint(s) still work after any layout change.
