# Pyt
## Homebrew PHP MVC Framework

### ToDo
- [ ] env ??
- [X] sessions
- [ ] database
- [X] uri segments
- [ ] models
- [X] spl_autoload_register
- [ ] namespaces ?? Not sure how with autoloading
- [X] Purge static methods where applicable
- [ ] Loading multiple views with $data passed to 1
- [ ] Remove base /app/controllers/controller as it's not needed
- [ ] Input sanitation

### File Structure
```
app
    controllers
    models
    views
    web.php
config
    constants.php
    database.php
core
    AutoLoader.php
    Load.php
    PYT_Config.php 
    PYT_Core.php
    Route.php
    Session.php
    URI.php 
public
    css
    js 
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