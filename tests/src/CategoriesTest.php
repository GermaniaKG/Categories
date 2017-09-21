<?php
namespace tests;

use Germania\Categories\Categories;
use Interop\Container\ContainerInterface;
use Psr\Container\ContainerInterface as PsrContainerInterface;

class CategoriesTest extends \PHPUnit_Framework_TestCase
{


    /**
     * @dataProvider provideDefaults
     */
    public function testInstantiation($id, $slug, $name, $description, $photo ) {

        $sut = new Categories;

        $this->assertInstanceOf(\Countable::class, $sut);
        $this->assertInstanceOf(ContainerInterface::class, $sut);
        $this->assertInstanceOf(PsrContainerInterface::class, $sut);
        $this->assertInstanceOf(\Iterator::class, $sut->getIterator());

    }


    public function provideDefaults()
    {
        return array(
            [ 42, 'mycat', 'My Category', 'This is a sample category.', "photo_url"]
        );
    }
}
