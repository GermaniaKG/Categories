<?php
namespace Germania\Categories;


class CategoryFilterIterator extends \FilterIterator
{
    public $category_id;

    public function __construct(\Traversable $iterator , CategoryInterface $category)
    {
        parent::__construct( $iterator instanceOf \IteratorAggregate ? $iterator->getIterator() : $iterator);

        $this->category_id = $category->getId();
    }

    public function accept()
    {
        $current = $this->getInnerIterator()->current();
        return ($current instanceOf CategoriesProviderInterface
            and $current->getCategories()->has( $this->category_id ));
    }
}
