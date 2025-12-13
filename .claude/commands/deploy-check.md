Pre-deployment checklist for pushing changes to production:
- List all modified files since last commit
- Check for debugging code (var_dump, console.log, error_reporting)
- Verify no sensitive data is hardcoded
- Check file permissions are correct
- Ensure wp-config.php is not in git
- Review .gitignore file
- Suggest creating a backup before deployment
