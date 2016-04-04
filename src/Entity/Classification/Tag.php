<?php

namespace Gravity\MediaBundle\Entity\Classification;

use Sonata\ClassificationBundle\Entity\BaseTag;

/**
 * Class Tag
 *
 * @author andy.thorne@timeinc.com
 */
class Tag extends BaseTag
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
