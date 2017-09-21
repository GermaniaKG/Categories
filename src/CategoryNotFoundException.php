<?php
namespace Germania\Categories;

use Interop\Container\Exception\NotFoundException;
use Psr\Container\NotFoundExceptionInterface;

class CategoryNotFoundException extends \Exception implements NotFoundExceptionInterface, NotFoundException
{

}
