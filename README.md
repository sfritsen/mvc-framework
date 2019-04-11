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
- [ ] Purge static methods

### File Structure
```
app
    controllers
    models
    view
    web.php
config
    constants.php
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
env.php
```

### Help
namespace https://www.youtube.com/watch?v=zTxz_kOLIZM

### Sample htaccess
```
RewriteEngine On 
RewriteCond $1 !^(images|css|js|robots\.txt|favicon\.ico) 
RewriteCond %{REQUEST_URI} !\.(js|css)$
RewriteRule ^([^/]+)/? index.php?url=$1 [L,QSA]
```