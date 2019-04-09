# Pyt

## Homebrew PHP MVC Framework

### ToDo
- [ ] env
- [ ] sessions
- [ ] database
- [X] uri-segment

### File Structure
```
app
    controllers
    models
    view
    web.php
config
    config.php
    constants.php
core
    Load.php 
    Pyt.php
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