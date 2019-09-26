# Pyt
## Homebrew PHP MVC Framework

### ToDo
- [ ] Database sessions
- [ ] Multiple database connections
- [ ] Input sanitation
- [ ] Error handling & logging
- [ ] Form validation
- [ ] Documentation

### File Structure
```
app (Routes file, helpers and MVC folders)
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