# PHP-Bootstrap
a PHP library for Bootstrap4

## Getting started
1. Clone this project
2. Create new php page file (about.php for example)
3. Require Bootstrap.php into your page
4. Start constructing your page with PHP-Bootstrap!

## Documentation

### Navbar
Supported parameters:
- `String` theme: `light`, `primary` or 'dark', this sets the color theme for the navbar
- `String` text-color: `light`, `primary` or 'dark', this sets the text color theme for the navbar
- `String` brand: your brand name
- `String` classes: custom classes you want to add to your navbar, seperated by spaces

```diff
- Children not yet supported!
```

```php
// Creating new bootstrap entity
$bs = new Bootstrap();

// Appending Navbar to page
$bs->Navbar(['theme' => 'dark', 'text-color' => 'dark', 'link-pos' => 'right', 'brand' => 'PHP-Bootstrap'], [
    $bs->NavbarLink(['href' => 'https://github.com/UnknowAI/php-bootstrap', 'text' => 'Github'])
]);
```