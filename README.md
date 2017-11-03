# PHP-Bootstrap
a PHP library for Bootstrap4

## Requirements
- php v7.0.10+

## Getting started
1. Clone this project
2. Create new php page file (about.php for example)
3. Require Bootstrap.php into your page
4. Start constructing your page with PHP-Bootstrap!

## Documentation

### Usage of the properties and children
Using the parameters and children is quite easy, you can send childs only, but you have to have the parameters an empty array, or a `NULL` value for it to work.
Example:
```php
// Valid component without properties
$bs->Navbar([], [
    $bs->NavbarLink(['href' => 'https://github.com/UnknowAI/php-bootstrap', 'text' => 'Github'])
]);

// Another valid component without properties
$bs->Navbar(null, [
    $bs->NavbarLink(['href' => 'https://github.com/UnknowAI/php-bootstrap', 'text' => 'Github'])
]);

// Invalid component without properties
$bs->Navbar([
    $bs->NavbarLink(['href' => 'https://github.com/UnknowAI/php-bootstrap', 'text' => 'Github'])
]);
```
If proven to be confusing, another way will be found and implemented asap.

### Navbar
Supported properties:
- `String` theme: `light`, `primary` or 'dark', this sets the color theme for the navbar
- `String` text-color: `light`, `primary` or 'dark', this sets the text color theme for the navbar
- `String` brand: your brand name
- `String` classes: custom classes you want to add to your navbar, seperated by spaces
- `String` position: `fixed-top`, `fixed-bottom`, `sticky-top` will determine where on the page the navbar will show, and how it behaves, not setting this property will result in the default non-fixed navbar

Supported children:
- `NavbarLink` a navbar link for navigating your website 

```php
// Creating new bootstrap entity
$bs = new Bootstrap();

// Appending Navbar to page
$bs->Navbar(['theme' => 'dark', 'text-color' => 'dark', 'link-pos' => 'right', 'brand' => 'PHP-Bootstrap'], [
    $bs->NavbarLink(['href' => 'https://github.com/UnknowAI/php-bootstrap', 'content' => 'Github'])
]);
```

### NavbarLink
Supported properties:
- `String` href: `url` the url you want your link to go
- `String` content: `[anything]` the text you want your link to display

```php
// Creating new bootstrap entity
$bs = new Bootstrap();

// Appending Navbar to page
$bs->Navbar(['theme' => 'dark', 'text-color' => 'dark', 'link-pos' => 'right', 'brand' => 'PHP-Bootstrap'], [
    // Adding link to Navbar
    $bs->NavbarLink(['href' => 'https://github.com/UnknowAI/php-bootstrap', 'content' => 'Github'])
]);
```