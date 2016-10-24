<?php
namespace Germania\Categories;

class Categories implements CategoriesInterface
{

    public $categories = array();


    public function push( CategoryInterface $category )
    {
        $this->categories[ $category->getId() ] = $category;
        return $this;
    }


    /**
     * @implements ContainerInterface
     * @return CategoryInterface
     */
    public function get( $id )
    {
        if ($this->has( $id )) {
            return $this->categories[ $id ];
        }
        throw new CategoryNotFoundException("Could not find Download Category with ID '$id'");
    }


    /**
     * @implements ContainerInterface
     * @return boolean
     */
    public function has ($id )
    {
        return array_key_exists( $id, $this->categories);
    }



    /**
     * @implements IteratorAggregate
     */
    public function getIterator()
    {
        return new \ArrayIterator( $this->categories );
    }


    /**
     * @implements Countable
     */
    public function count()
    {
        return count($this->categories);
    }
}
