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
- [ ] Purge static methods where applicable
- [ ] Loading multiple views with $data passed to 1

### File Structure
```
app
    controllers
    models
    view
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
```

### Sample htaccess
```
RewriteEngine On 
RewriteCond $1 !^(images|css|js|robots\.txt|favicon\.ico) 
RewriteCond %{REQUEST_URI} !\.(js|css)$
RewriteRule ^([^/]+)/? index.php?url=$1 [L,QSA]
```