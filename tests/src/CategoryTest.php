<?php
namespace tests;

use Germania\Categories\Category;

class CategoryTest extends \PHPUnit_Framework_TestCase
{


    /**
     * @dataProvider provideDefaults
     */
    public function testFluidInterfaces($id, $slug, $name, $description ) {
        $sut = new Category;

        $this->assertInstanceOf('Germania\Categories\CategoryInterface', $sut);

        $this->assertSame($sut, $sut->setId( $id ));
        $this->assertSame($sut, $sut->setSlug( $slug ));
        $this->assertSame($sut, $sut->setName( $name ));
        $this->assertSame($sut, $sut->setDescription( $description ));

    }



    /**
     * @dataProvider provideDefaults
     */
    public function testInterceptors($id, $slug, $name, $description ) {
        $sut = new Category;

        $this->assertEquals($id,   $sut->setId( $id )->getId());
        $this->assertEquals($slug, $sut->setSlug( $slug )->getSlug());
        $this->assertEquals($name, $sut->setName( $name )->getName());
        $this->assertEquals($description, $sut->setDescription( $description )->getDescription());
    }


    /**
     * @dataProvider provideDefaults
     */
    public function testToStringMethod($id, $slug, $name, $description ) {
        $sut = new Category;
        $sut->setName( $name );

        $this->assertEquals($name, $sut->__toString());
    }


    public function provideDefaults()
    {
        return array(
            [ 42, 'mycat', 'My Category', 'This is a sample category.']
        );
    }
}
