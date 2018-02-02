<?php
namespace tests;

use Germania\Categories\Categories;
use Germania\Categories\CategoryInterface;
use Germania\Categories\CategoryNotFoundException;
use Interop\Container\ContainerInterface;
use Psr\Container\ContainerInterface as PsrContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

class CategoriesTest extends \PHPUnit\Framework\TestCase
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


    public function testPushMethod()
    {
        $cat_id = 1;

        $cat_mock = $this->prophesize(CategoryInterface::class );
        $cat_mock->getId()->willReturn( $cat_id );
        $cat = $cat_mock->reveal();

        $sut = new Categories;
        $original_count = count($sut);
        $this->assertFalse($sut->has( $cat_id ));
        $this->assertSame($sut, $sut->push( $cat ));
        $this->assertTrue($sut->has( $cat_id ));
        $this->assertSame( $sut->get( $cat_id), $cat);
        $this->assertGreaterThan($original_count, count($sut));
    }

    public function testCategoryNotFoundException()
    {
        $cat_id = "does_not_exist";

        $cat_mock = $this->prophesize(CategoryInterface::class );
        $cat_mock->getId()->willReturn( $cat_id );
        $cat = $cat_mock->reveal();

        $sut = new Categories;
        $original_count = count($sut);

        $this->assertFalse($sut->has( $cat_id ));
        $this->expectException( CategoryNotFoundException::class );
        $this->expectException( NotFoundExceptionInterface::class );
        $sut->get( $cat_id);
    }


    public function provideDefaults()
    {
        return array(
            [ 42, 'mycat', 'My Category', 'This is a sample category.', "photo_url"]
        );
    }
}
