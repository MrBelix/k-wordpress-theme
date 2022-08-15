<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ImageAnimationBlock extends Block
{
    public $name = 'Image Animation Block';

    public function with()
    {
        $fields = get_fields();

        return [
            'title' => $fields['title']??null,
            'subTitle' => $fields['sub-title']??null,
            'leftSide' => $fields['left-side']??null,
            'rightSide' => $fields['right-side']??null,
            'is_reverse' => $fields['is-reverse']??null
        ];
    }

    public function fields()
    {
        $fields = new FieldsBuilder('image-animation-block');

        $fields
            ->addText('title')
            ->addText('sub-title')
            ->addTrueFalse('is-reverse')
            ->addImage('left-side')
            ->addFile('right-side');

        return $fields->build();
    }
}
