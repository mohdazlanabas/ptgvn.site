# Gaia Digital Agency - Project Information

## Project Details
- **Client**: Gaia Digital Agency (Bali)
- **Website**: https://gaiada.com/
- **Environment**: Local staging site
- **Deployment**: cPanel via Git

## WordPress Configuration
- **Active Theme**: Twenty Twenty-Five
- **WordPress Type**: Standard installation
- **Key Features**:
  - Backup & Restore (Backuply Pro)
  - Performance Caching (SpeedyCache Pro)
  - Login Security (Loginizer)
  - Cookie Management (CookieAdmin Pro)

## Custom Development
- **Testing Page**: `/testing-page.php` - Standalone editable page for testing
- **Custom Templates**: `/wp-content/themes/twentytwentyfive/template-testing-page.php`

## Important Files
- `wp-config.php` - WordPress configuration (NOT in Git)
- `testing-page.php` - Custom standalone test page
- `.gitignore` - Git ignore rules

## Server Access
- Check `kogin.md` for SSH credentials
- Server: s12017.sgp1.stableserver.net

## Development Notes
- Always test locally before deploying
- Use slash commands for common tasks
- Keep plugins updated
- Backup database before major changes
