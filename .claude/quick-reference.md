# Quick Reference Guide

## Available Slash Commands

### WordPress Development
- `/wp-status` - Check WordPress installation status
- `/theme-analyze` - Analyze Twenty Twenty-Five theme structure
- `/find-hooks` - Search for WordPress hooks
- `/check-plugins` - Analyze installed plugins

### Security & Performance
- `/security-scan` - Run security check
- `/optimize-site` - Find performance improvements
- `/deploy-check` - Pre-deployment checklist

### Custom Pages
- `/edit-testing` - Edit the testing-page.php file

## Common File Locations

### Theme Files
```
/wp-content/themes/twentytwentyfive/
├── templates/          (page templates)
├── parts/             (template parts)
├── patterns/          (block patterns)
├── styles/            (CSS)
└── theme.json         (theme config)
```

### Custom Files
```
/testing-page.php      (standalone test page)
/kogin.md             (SSH credentials)
/readme.md            (project documentation)
```

### Configuration
```
/wp-config.php        (WordPress config - NOT in Git)
/.gitignore           (Git ignore rules)
/.claude/             (Claude Code config)
```

## Quick Tasks

### Edit Testing Page
1. Open `/ptgvn.site/testing-page.php`
2. Edit HTML between START/END comments
3. Save and refresh browser

### Deploy Changes
1. Run `/deploy-check`
2. Commit to Git
3. Push to cPanel repository
4. Clear cache with SpeedyCache Pro

### Check Site Health
1. Run `/wp-status`
2. Run `/security-scan`
3. Run `/optimize-site`
