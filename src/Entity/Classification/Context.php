<?php

namespace Gravity\MediaBundle\Entity\Classification;

use Sonata\ClassificationBundle\Entity\BaseContext;

/**
 * Class Context
 *
 * @author andy.thorne@timeinc.com
 */
class Context extends BaseContext
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
