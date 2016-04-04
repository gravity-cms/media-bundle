<?php

namespace Gravity\MediaBundle\Entity\Classification;

use Sonata\ClassificationBundle\Entity\BaseCategory;

/**
 * Class Category
 *
 * @author andy.thorne@timeinc.com
 */
class Category extends BaseCategory
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
