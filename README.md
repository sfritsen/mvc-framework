# Pyt
## Homebrew PHP MVC Framework

### ToDo
- [X] Cookie sessions
- [ ] Database sessions
- [X] database
- [ ] Multiple database connections
- [X] uri segments
- [X] models
- [X] spl_autoload_register
- [ ] Share data to all views in 1 call
- [ ] Input sanitation
- [ ] Error handling & logging
- [ ] Form validation
- [ ] Documentation & comments
- [ ] Helpers
- [ ] CSRF protection
- [ ] Move db login info into its own config

### File Structure
```
app (Routes file and MVC folders)
config (User defined config files)
core (Core framework)
public (User css and js files.  Anything public facing)
index.php
htaccess
```

### Sample htaccess
```
RewriteEngine On 
RewriteCond $1 !^(images|css|js|robots\.txt|favicon\.ico) 
RewriteCond %{REQUEST_URI} !\.(js|css)$
RewriteRule ^([^/]+)/? index.php?url=$1 [L,QSA]
```