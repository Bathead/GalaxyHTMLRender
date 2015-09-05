# Galaxy HTML Render

About
---------------
Easy and fast HTML template rendering class.

Features
---------------
* Only one method (static)
* Supported dot and slash template render path (e.g "gallery/template/page" and "gallery.template.page").

Requirements
---------------
* PHP 5.4

Using
---------------

Set template dir and file extension in file GalaxyHTMLRender.class.php
```php
 public static $DIR = '/view/'; /* template directory */
 public static $EXTENSION = '.php'; /* template extensions */
```

Create template and output two variables (for example — gallery/template/page.php)
```php
<?=$variable1;?> <?=$variable2;?>
```

Call method and set two variables
```php
echo GalaxyHTMLRender::render('gallery.template.page', ['variable1' => 'Hello', 'variable2' => 'world']);
```
Profit!

```html
Hello world
```

