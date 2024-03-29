# Germania KG · Categories

**This package was destilled from legacy code!**   
You better do not want it to use this in production.



[![Packagist](https://img.shields.io/packagist/v/germania-kg/categories.svg?style=flat)](https://packagist.org/packages/germania-kg/categories)
[![PHP version](https://img.shields.io/packagist/php-v/germania-kg/categories.svg)](https://packagist.org/packages/germania-kg/categories)
[![Tests](https://github.com/GermaniaKG/Categories/actions/workflows/tests.yml/badge.svg)](https://github.com/GermaniaKG/Categories/actions/workflows/tests.yml)

## Installation with Composer

```bash
$ composer require germania-kg/categories
```

**MySQL:** This package requires a MySQL tables *categories* which you can install using `germania_categories.sql` in `sql/` directory.


## Usage

While the *Categories* class is a simple storage, *PdoCategories* reads all downloads from the database.
They both implement the [PSR-11 ContainerInterface](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-11-container.md)  as well as its [container-interop](https://github.com/container-interop/container-interop) antecessor, [IteratorAggregate](http://php.net/manual/de/class.iteratoraggregate.php) and SPL's [Countable](http://php.net/manual/de/class.countable.php).

```php
<?php
use Germania\Categories\Categories;
use Germania\Categories\PdoCategories;
use Germania\Categories\Category;

//
// 1. Simple usage:
//
$categories = new Categories( );

$cat = new Category;
$cat->setSlug( 'cars' );
$categories->push( $cat );


//
// 2. Or, get all from PDO datebase:
//
$categories = new PdoCategories( $pdo );


//
// Check on ID and retrieve
//
$check = $categories->has( 42 );
$my_cat = $categories->get( 42 );

echo $my_cat->getSlug();
?>
```

## Issues

- Since [PSR 11](https://github.com/php-fig/fig-standards/blob/master/proposed/container.md) is now standard, [container-interop](https://github.com/container-interop/container-interop) should be retired. Discuss at [issue #1][i1].

Also see [full issues list.][i0]

[i0]: https://github.com/GermaniaKG/Categories/issues
[i1]: https://github.com/GermaniaKG/Categories/issues/1


## Development

```bash
$ git clone https://github.com/GermaniaKG/Categories.git
$ cd Categories
$ composer install
```

## Unit tests

Either copy `phpunit.xml.dist` to `phpunit.xml` and adapt to your needs, or leave as is. Run [PhpUnit](https://phpunit.de/) test or composer scripts like this:

```bash
$ composer test
# or
$ vendor/bin/phpunit
```
