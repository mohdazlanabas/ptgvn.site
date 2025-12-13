# PTGVN.site - WordPress Site

WordPress website with automated deployment via GitHub Actions.

- **Production**: https://ptgvn.site/
- **Staging**: https://staging.ptgvn.site/
- **Repository**: https://github.com/mohdazlanabas/ptgvn.site

## Project Overview

This is a WordPress installation for development and staging purposes. The site uses modern WordPress themes and includes various plugins for backup, security, caching, and functionality enhancements.

### Key Components

- **WordPress Core**: Standard WordPress installation
- **Active Theme**: Twenty Twenty-Five
- **Other Themes**: Twenty Twenty-Three, Twenty Twenty-Four
- **Key Plugins**:
  - Backuply Pro - Backup and restore functionality
  - SpeedyCache Pro - Performance and caching optimization
  - Loginizer - Login security and protection
  - CookieAdmin Pro - Cookie consent management
  - Akismet - Spam protection

### Custom Development

- **Testing Page** (`/testing-page.php`) - Standalone editable page for testing and custom content
  - Accessible at: `your-site.com/testing-page.php`
  - Edit locally without WordPress admin
  - Changes appear immediately on refresh

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

#### WordPress Development
- `/wp-status` - Comprehensive WordPress installation status check
- `/theme-analyze` - Analyze Twenty Twenty-Five theme structure in detail
- `/find-hooks` - Search for WordPress hooks (actions and filters)
- `/check-plugins` - Analyze all installed plugins and identify conflicts

#### Security & Performance
- `/security-scan` - Perform security audit of WordPress installation
- `/optimize-site` - Find performance optimization opportunities
- `/deploy-check` - Pre-deployment checklist and safety checks

#### Custom Development
- `/edit-testing` - Quick access to edit the testing-page.php file

#### Project Reference
See `.claude/quick-reference.md` for complete command documentation

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
   - Check site status: `/wp-status`
   - Analyze theme: `/theme-analyze`
   - Find hooks: `/find-hooks`
   - Security audit: `/security-scan`
   - Optimize performance: `/optimize-site`
   - Pre-deployment check: `/deploy-check`
   - Edit testing page: `/edit-testing`
   - Debug issues: Ask Claude to analyze error logs
   - Code generation: Request new features or modifications
   - Code review: Ask Claude to review your changes

4. **Edit Custom Pages Locally**

   The testing page can be edited without WordPress admin:
   ```bash
   # Open the file in your editor
   open ptgvn.site/testing-page.php

   # Or use Claude Code
   /edit-testing
   ```

   Make changes, save, and refresh your browser to see updates immediately.

### Best Practices

- Always read existing code before making modifications
- Test changes in local environment before committing
- Use slash commands for common WordPress tasks
- Keep plugins and themes updated
- Backup database before major changes

## Deployment

This site uses **automated GitHub Actions deployments**:

### Deployment Workflows

1. **Staging Deployment** (`.github/workflows/deploy.yml`)
   - **Branch**: `staging`
   - **Target**: staging.ptgvn.site
   - **Path**: `/home/ptgvnsit/staging.ptgvn.site/`
   - **Trigger**: Push to `staging` branch

2. **Production Deployment** (`.github/workflows/deploy-production.yml`)
   - **Branch**: `main`
   - **Target**: ptgvn.site
   - **Path**: `/home/ptgvnsit/ptgvn.site/`
   - **Trigger**: Push to `main` branch

### Deployment Workflow

```bash
# 1. Make changes locally and test
# 2. Commit changes
git add .
git commit -m "Your commit message"

# 3. Deploy to staging first
git push origin staging

# 4. Verify on https://staging.ptgvn.site/

# 5. Merge to main for production deployment
git checkout main
git merge staging
git push origin main

# 6. Monitor deployment in GitHub Actions tab
```

### Deployment Checklist

Use `/deploy-check` slash command for automated pre-deployment verification, or follow this manual checklist:

- [ ] Test all changes locally
- [ ] Run `/security-scan` to check for vulnerabilities
- [ ] Verify database migrations (if any)
- [ ] Ensure wp-config.php is not in Git
- [ ] Backup production database
- [ ] Commit changes to Git
- [ ] Push to `staging` branch first
- [ ] Verify on staging.ptgvn.site
- [ ] Merge to `main` and push
- [ ] Monitor GitHub Actions for successful deployment
- [ ] Clear cache with SpeedyCache Pro after deployment
- [ ] Verify site functionality on production

### SSH Setup

The deployment uses SSH key authentication:
- **GitHub Secret**: `SSH_KEY` (contains private key)
- **Local Keys**: `~/.ssh/ptgvn_github` and `~/.ssh/ptgvn_github.pub`
- **Server**: Public key added to `/home/ptgvnsit/.ssh/authorized_keys`

## Git Branches

- **main** - Production branch (auto-deploys to ptgvn.site)
- **staging** - Staging branch (auto-deploys to staging.ptgvn.site)
- **branch-a, branch-b, branch-c** - Feature development branches

## Monitoring Deployments

Check deployment status:
1. Go to GitHub repository
2. Click **Actions** tab
3. View running/completed workflows
4. Check logs for any errors

## Support

For issues or questions, check the GitHub repository issues page.
