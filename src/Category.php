<?php
namespace Germania\Categories;


class Category extends CategoryAbstract implements CategoryInterface
{

	public function __toString()
	{
		return $this->getName();
	}

}
