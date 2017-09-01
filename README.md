# Germania KG · Categories

**This package was destilled from legacy code!**   
You better do not want it to use this in production.

[![Build Status](https://travis-ci.org/GermaniaKG/Categories.svg?branch=master)](https://travis-ci.org/GermaniaKG/Categories)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/GermaniaKG/Categories/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/Categories/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/GermaniaKG/Categories/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/Categories/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/GermaniaKG/Categories/badges/build.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/Categories/build-status/master)

## Installation

```bash
$ composer require germania-kg/categories
```

**MySQL:** This package requires a MySQL tables *categories* which you can install using `germania_categories.sql` in `sql/` directory.


## Usage

While the *Categories* class is a simple storage, *PdoCategories* reads all downloads from the database. They both implement the [container-interop](https://github.com/container-interop/container-interop) (upcoming [PSR 11](https://github.com/php-fig/fig-standards/blob/master/proposed/container.md) standard), [IteratorAggregate](http://php.net/manual/de/class.iteratoraggregate.php) and SPL's [Countable](http://php.net/manual/de/class.countable.php). 

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
$cat->setUrl( 'http://...' );
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

echo $my_cat->getUrl();
?>
```

## Issues

- Since [PSR 11](https://github.com/php-fig/fig-standards/blob/master/proposed/container.md) is now standard, [container-interop](https://github.com/container-interop/container-interop) should be retired. Discuss at [issue #1][i1].

Also see [full issues list.][i0]

[i0]: https://github.com/GermaniaKG/Categories/issues 
[i1]: https://github.com/GermaniaKG/Categories/issues/1 

## Development

```bash
$ git clone git@github.com:GermaniaKG/Categories.git germania-categories
$ cd germania-categories
$ composer install
```

## Unit tests

Either copy `phpunit.xml.dist` to `phpunit.xml` and adapt to your needs, or leave as is. 
Run [PhpUnit](https://phpunit.de/) like this:

```bash
$ vendor/bin/phpunit
```
