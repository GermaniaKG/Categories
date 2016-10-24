<?php
namespace Germania\Categories;

use Interop\Container\ContainerInterface;

interface CategoriesInterface extends \IteratorAggregate, \Countable, ContainerInterface
{
    public function push (CategoryInterface $category );
}
