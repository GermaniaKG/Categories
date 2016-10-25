<?php
namespace Germania\Categories;

interface CategoryInterface
{

    /**
     * @param int $id
     * @return self
     */
    public function setId( $id );


    /**
     * @return int
     */
    public function getId( );


    /**
     * @param string $name
     * @return self
     */
    public function setName( $name );


    /**
     * @return string
     */
    public function getName( );


    /**
     * @param string $slug
     * @return self
     */
    public function setSlug( $slug );


    /**
     * @return string
     */
    public function getSlug( );


    /**
     * @param string $description
     * @return self
     */
    public function setDescription( $description );


    /**
     * @return null|string
     */
    public function getDescription( );


    /**
     * @param string $photo
     * @return self
     */
    public function setPhoto( $photo );


    /**
     * @return null|string
     */
    public function getPhoto( );


}
