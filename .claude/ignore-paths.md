# Paths to Ignore During Analysis

When analyzing this WordPress project, skip these directories to improve performance:

## WordPress Core (rarely modified)
- `/ptgvn.site/wp-admin/`
- `/ptgvn.site/wp-includes/`

## Third-party Libraries
- `/ptgvn.site/wp-content/plugins/*/vendor/`
- `/ptgvn.site/wp-content/plugins/*/node_modules/`
- `/ptgvn.site/wp-content/plugins/*/lib/phpseclib/`

## Cache and Temporary Files
- `/ptgvn.site/wp-content/cache/`
- `/ptgvn.site/wp-content/speedycache-config/`
- `/ptgvn.site/wp-content/backuply-backups/`
- `/ptgvn.site/wp-content/uploads/`

## Build Files
- `*.min.js`
- `*.min.css`
- `/ptgvn.site/wp-content/plugins/*/assets/js/vendor/`

## Focus on These Instead
- `/ptgvn.site/wp-content/themes/twentytwentyfive/` (active theme)
- `/ptgvn.site/testing-page.php` (custom page)
- `/ptgvn.site/wp-config.php` (configuration)
- Custom plugins if any
