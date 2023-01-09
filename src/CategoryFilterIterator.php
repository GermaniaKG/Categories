<?php
namespace Germania\Categories;

/**
 * Filters any Traversable for CategoriesProviderInterface items that do contain the given Category.
 */
class CategoryFilterIterator extends \FilterIterator
{
    public $category_id;


    /**
     * @param \Traversable      $iterator
     * @param CategoryInterface $category
     */
    public function __construct( \Traversable $iterator, CategoryInterface $category)
    {
        parent::__construct( $iterator instanceOf \IteratorAggregate ? $iterator->getIterator() : $iterator);

        $this->category_id = $category->getId();
    }


    #[\ReturnTypeWillChange]
    public function accept()
    {
        $current = $this->getInnerIterator()->current();

        return ($current instanceOf CategoriesProviderInterface
            and $current->getCategories()->has( $this->category_id ));
    }
}
