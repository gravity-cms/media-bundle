<?php

namespace Gravity\MediaBundle\Entity\Classification;

use Sonata\ClassificationBundle\Entity\BaseCollection;

/**
 * Class Collection
 *
 * @author andy.thorne@timeinc.com
 */
class Collection extends BaseCollection
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
