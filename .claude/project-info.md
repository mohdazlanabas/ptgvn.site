# PTGVN.site - Project Information

## Project Details
- **Production Site**: https://ptgvn.site/
- **Staging Site**: https://staging.ptgvn.site/
- **Repository**: https://github.com/mohdazlanabas/ptgvn.site
- **Server**: ptgvn.site (SSH user: ptgvnsit)

## Deployment Setup

### Automated GitHub Actions Deployments
- **Production** (`main` branch → ptgvn.site):
  - Workflow: `.github/workflows/deploy-production.yml`
  - Deploys to: `/home/ptgvnsit/ptgvn.site/`
  - Trigger: Push to `main` branch

- **Staging** (`staging` branch → staging.ptgvn.site):
  - Workflow: `.github/workflows/deploy.yml`
  - Deploys to: `/home/ptgvnsit/staging.ptgvn.site/`
  - Trigger: Push to `staging` branch

### SSH Authentication
- SSH key stored in GitHub Secrets as `SSH_KEY`
- Public key: `~/.ssh/ptgvn_github.pub` (on local machine)
- Private key: `~/.ssh/ptgvn_github` (passphrase-free for GitHub Actions)

## WordPress Configuration
- **Active Theme**: Twenty Twenty-Five
- **WordPress Type**: Standard installation
- **Key Plugins**:
  - Backuply Pro - Backup & Restore
  - SpeedyCache Pro - Performance Caching
  - Loginizer - Login Security
  - CookieAdmin Pro - Cookie Management
  - Akismet - Spam Protection

## Custom Development
- **Testing Page**: `/testing-page.php` - Standalone editable page for testing
- **Custom Templates**: `/wp-content/themes/twentytwentyfive/template-testing-page.php`

## Important Files
- `wp-config.php` - WordPress configuration (NOT in Git)
- `testing-page.php` - Custom standalone test page
- `.gitignore` - Git ignore rules
- `GITHUB_SSH_KEY.txt` - SSH key reference (excluded from deployment)

## Git Workflow
- **main** - Production branch (auto-deploys to ptgvn.site)
- **staging** - Staging branch (auto-deploys to staging.ptgvn.site)
- **branch-a, branch-b, branch-c** - Feature branches

## Development Notes
- Always test changes locally before pushing
- Push to `staging` branch first to test on staging.ptgvn.site
- Merge to `main` only after staging verification
- Keep plugins updated
- Backup database before major changes
- Monitor GitHub Actions for deployment status
