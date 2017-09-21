<?php
namespace Germania\Categories;

use Interop\Container\ContainerInterface;
use Psr\Container\ContainerInterface as PsrContainerInterface;

interface CategoriesInterface extends \IteratorAggregate, \Countable, PsrContainerInterface, ContainerInterface
{

    /**
     * @param CategoryInterface $category
     * @return self
     */
    public function push (CategoryInterface $category );

}
