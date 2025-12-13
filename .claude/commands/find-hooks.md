Search for WordPress hooks (actions and filters) in the current theme and custom plugins:

1. **Search for hook registrations:**
   - `add_action()` calls
   - `add_filter()` calls
   - `do_action()` calls (custom hooks)
   - `apply_filters()` calls (custom filters)

2. **Analyze hook usage:**
   - List all hooks found with their locations (file:line)
   - Identify hook priorities
   - Show callback functions
   - Note any custom hooks created

3. **Search locations:**
   - Active theme functions.php
   - Theme template files
   - Custom plugins
   - Child theme if applicable

4. **Provide context:**
   - Explain what each major hook does
   - Identify potential conflicts
   - Suggest optimization opportunities

Use grep to search for: `add_action|add_filter|do_action|apply_filters` patterns
