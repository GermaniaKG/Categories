<?php
namespace Germania\Categories;

interface CategoriesProviderInterface
{
    public function getCategories();
    public function setCategories( CategoriesInterface $categories);
}
