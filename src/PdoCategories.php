<?php
namespace Germania\Categories;

class PdoCategories extends Categories implements CategoriesInterface
{

    /**
     * @var string
     */
    public static $table = 'categories';


    /**
     * @var array
     */
    public $categories = array();


    /**
     * @param PDO @pdo
     * @param CategoryInterface Optional: Category template object
     */
    public function __construct( \PDO $pdo, CategoryInterface $category = null  )
    {
        // ID is listed twice here in order to use it with FETCH_UNIQUE as array key
        $sql = 'SELECT
        id,
        id                   AS id,
        category_slug        AS slug,
        category_name        AS name,
        category_description AS description,
        category_photo       AS photo

        FROM ' . static::$table . '
        WHERE is_active > 0';

        $stmt = $pdo->prepare( $sql );

        $stmt->setFetchMode( \PDO::FETCH_CLASS, $category ? get_class($category) : Category::class );

        if (!$stmt->execute()):
            throw new \RuntimeException("Could not retrieve Download Categories from database");
        endif;

        $this->categories = $stmt->fetchAll(\PDO::FETCH_UNIQUE);
    }


}
