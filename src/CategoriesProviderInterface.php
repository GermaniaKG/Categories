<?php
namespace Germania\Categories;

interface CategoriesProviderInterface
{

    /**
     * @return null|CategoriesInterface
     */
    public function getCategories();


    /**
     * @param CategoriesInterface $categories
     * @return self
     */
    public function setCategories( CategoriesInterface $categories);
}
