# Germania KG · Categories

**This package was destilled from legacy code!**   
You better do not want it to use this in production.


## Installation

```bash
$ composer require germania-kg/categories
```

**MySQL:** This package requires a MySQL tables *categories* which you can install using `germania_categories.sql` in `sql/` directory.


## Usage

While the *Categories* class is a simple storage, *PdoCategories* reads all downloads from the database. They both implement the [container-interop](https://github.com/container-interop/container-interop) (upcoming [PSR 11](https://github.com/php-fig/fig-standards/blob/master/proposed/container.md) standard), [IteratorAggregate](http://php.net/manual/de/class.iteratoraggregate.php) and SPL's [Countable](http://php.net/manual/de/class.countable.php). 

You can iterate over it all worlds due to its  interface, and you can retrieve single *Download* instances:

```php
<?php
use Germania\Categories\Categories;
use Germania\Categories\PdoCategories;
use Germania\Categories\Category;

$cat = new Categories( );

$cat = new Category;
$cat->setUrl( 'http://...' );
$categories->push( $cat );

// Or, get all from PDO datebase:
$categories = new PdoCategories( $pdo );

// Check on ID and retrieve
$check = $categories->has( 42 );
$my_cat = $categories->get( 42 );

echo $my_cat->getUrl();
?>
```


## Development and Testing

Develop using `develop` branch, using [Git Flow](https://github.com/nvie/gitflow).   
**Currently, no tests are specified.**

```bash
$ git clone git@github.com:GermaniaKG/Categories.git germania-categories
$ cd germania-categories
$ cp phpunit.xml.dist phpunit.xml
$ phpunit
```
