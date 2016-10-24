<?php
namespace Germania\Categories;

use Interop\Container\ContainerInterface;

interface CategoriesInterface extends \IteratorAggregate, \Countable, ContainerInterface
{

    /**
     * @param CategoryInterface $category
     * @return self
     */
    public function push (CategoryInterface $category );
}
