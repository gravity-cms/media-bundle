<?php
/**
 * Copyright (c) 2016 Gravity CMS.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the
 * Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT
 * NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace Gravity\MediaBundle\Field\Type\Reference\Display;

use Gravity\CmsBundle\Display\Type\AbstractDisplayDefinition;
use Gravity\CmsBundle\Field\FieldDefinitionInterface;
use Gravity\MediaBundle\Field\Type\Reference\Display\AssetLibaray\PictureMediaAssetLibrary;
use Gravity\MediaBundle\Field\Type\Reference\MediaField;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class PictureMediaDisplay
 *
 * @author Andy Thorne <contrabandvr@gmail.com>
 */
class PictureMediaDisplay extends AbstractDisplayDefinition
{
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'media.picture';
    }

    /**
     * @inheritDoc
     */
    public function getLabel()
    {
        return 'Picture Media';
    }

    /**
     * @inheritDoc
     */
    public function getDescription()
    {
        return 'Render a set of images as a picture element';
    }

    /**
     * {@inheritDoc}
     */
    public function getAssetLibraries()
    {
        return [
            new PictureMediaAssetLibrary(),
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTemplate()
    {
        return 'GravityMediaBundle:Field/Display:picture-media.html.twig';
    }

    /**
     * @inheritDoc
     */
    public function getTemplateOptions($entity, array $options)
    {
        return [
            'image'         => $entity->getMedia(),
            'image_styles'  => $options['image_styles'],
            'media_options' => [
                'title' => $entity->getTitle(),
                'alt'   => $entity->getAlt(),
                'class' => 'img-polaroid media-object',
            ]
        ];
    }

    /**
     * @inheritDoc
     */
    public function setOptions(OptionsResolver $optionsResolver, array $options = [])
    {
        $optionsResolver->setRequired('image_styles');
        $optionsResolver->setAllowedTypes('image_styles', 'array');
    }


    /**
     * @inheritDoc
     */
    public function supportsField(FieldDefinitionInterface $field)
    {
        return $field instanceof MediaField;
    }

}
