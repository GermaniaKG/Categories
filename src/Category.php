<?php
namespace Germania\Categories;


class Category extends CategoryAbstract implements CategoryInterface
{

    /**
     * @uses getName()
     */
	public function __toString()
	{
		return $this->getName();
	}

}
