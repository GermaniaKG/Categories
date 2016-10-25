<?php
namespace Germania\Categories;

abstract class CategoryAbstract implements CategoryInterface
{

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $photo;


    /**
     * @uses $id
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @uses $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    /**
     * @uses $slug
     */
    public function getSlug()
    {
        return $this->slug;
    }


    /**
     * @uses $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }


    /**
     * @uses $name
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @uses $name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    /**
     * @uses $description
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * @uses $description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets the value of photo.
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the value of photo.
     *
     * @param string $photo the photo
     *
     * @return self
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }
}
