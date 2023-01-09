<?php
namespace Germania\Categories;

class Categories implements CategoriesInterface
{

    /**
     * @var array
     */
    public $categories = array();


    public function push( CategoryInterface $category )
    {
        $this->categories[ $category->getId() ] = $category;
        return $this;
    }


    /**
     * @return CategoryInterface
     * @throws CategoryNotFoundException
     * @uses   $categories
     */
    #[\ReturnTypeWillChange]
    public function get( $id )
    {
        if ($this->has( $id )) {
            return $this->categories[ $id ];
        }
        throw new CategoryNotFoundException("Could not find Download Category with ID '$id'");
    }


    /**
     * @return boolean
     * @uses   $categories
     */
    #[\ReturnTypeWillChange]
    public function has ($id )
    {
        return array_key_exists( $id, $this->categories);
    }



    /**
     * @return \ArrayIterator
     * @uses   $categories
     */
    #[\ReturnTypeWillChange]
    public function getIterator()
    {
        return new \ArrayIterator( $this->categories );
    }


    /**
     * @return int
     * @uses   $categories
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->categories);
    }
}
