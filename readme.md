# Gaia Digital Agency WordPress Staging

Local WordPress staging and test site for Azlan Gaia Digital Agency (Bali) — https://gaiada.com/.

This folder is versioned in Git and will be deployed via cPanel.

## Project Overview

This is a WordPress installation for development and staging purposes. The site uses modern WordPress themes and includes various plugins for backup, security, caching, and functionality enhancements.

### Key Components

- **WordPress Core**: Standard WordPress installation
- **Themes**: Twenty Twenty-Three, Twenty Twenty-Four, Twenty Twenty-Five
- **Key Plugins**:
  - Backuply Pro - Backup and restore functionality
  - SpeedyCache Pro - Performance and caching optimization
  - Loginizer - Login security and protection
  - CookieAdmin Pro - Cookie consent management
  - Akismet - Spam protection

## Development Environment Setup

### Prerequisites

- PHP 7.4 or higher
- MySQL 5.7+ or MariaDB 10.3+
- Apache or Nginx web server
- Composer (optional, for dependency management)

### Local Development Setup

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd ptgvn.site
   ```

2. **Configure WordPress**
   - Copy `wp-config-sample.php` to `wp-config.php`
   - Update database credentials in `wp-config.php`:
     ```php
     define('DB_NAME', 'your_database_name');
     define('DB_USER', 'your_database_user');
     define('DB_PASSWORD', 'your_database_password');
     define('DB_HOST', 'localhost');
     ```

3. **Set up the database**
   - Create a new MySQL database
   - Import the database dump (if available)

4. **Configure file permissions**
   ```bash
   chmod 755 ptgvn.site
   chmod 644 ptgvn.site/wp-config.php
   chmod -R 755 ptgvn.site/wp-content
   ```

5. **Access the site**
   - Navigate to your local development URL
   - Complete WordPress installation if setting up fresh

### Development Workflow

1. Make changes in your local environment
2. Test thoroughly
3. Commit changes to Git
4. Deploy to staging/production via cPanel

## Claude Code Usage

This project includes Claude Code integration for AI-assisted development.

### Available Slash Commands

Custom slash commands are located in `.claude/commands/`:

- `/wp-status` - Check WordPress installation status, active theme, plugins, and configuration
- `/find-hooks` - Search for WordPress hooks (actions and filters) in theme and plugins
- `/theme-analyze` - Analyze the active WordPress theme structure and components

### Using Claude Code

1. **Navigate to project directory**
   ```bash
   cd /Users/rogerwoolie/Documents/Project_CScience/ptgvn.site
   ```

2. **Start Claude Code**
   ```bash
   claude
   ```

3. **Common tasks with Claude Code**
   - Analyze theme files: `/theme-analyze`
   - Find specific hooks: `/find-hooks`
   - Debug issues: Ask Claude to analyze error logs or specific files
   - Code generation: Request new features or modifications
   - Code review: Ask Claude to review your changes

### Best Practices

- Always read existing code before making modifications
- Test changes in local environment before committing
- Use slash commands for common WordPress tasks
- Keep plugins and themes updated
- Backup database before major changes

## Deployment

This site is deployed via cPanel. Ensure all changes are committed to Git before deployment.

### Deployment Checklist

- [ ] Test all changes locally
- [ ] Verify database migrations (if any)
- [ ] Check file permissions
- [ ] Backup production database
- [ ] Deploy via cPanel Git integration
- [ ] Clear cache after deployment
- [ ] Verify site functionality

## Support

For issues or questions about the Gaia Digital Agency site, contact the development team or visit https://gaiada.com/.
