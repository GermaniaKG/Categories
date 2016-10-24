<?php
namespace Germania\Categories;

interface CategoryInterface
{
    public function setId( $id );
    public function getId( );

    public function setName( $name );
    public function getName( );

    public function setSlug( $slug );
    public function getSlug( );

    public function setDescription( $desc );
    public function getDescription( );


}
