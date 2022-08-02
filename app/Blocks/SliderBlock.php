<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SliderBlock extends Block
{
    public $name = 'Slider Block';


    public function with()
    {
        $fields = get_fields();
        return [
            'title' => $fields['title']??null,
            'items' => $fields['items']??[],
        ];
    }

    public function fields()
    {
        $fields = new FieldsBuilder('slider-block');

        $fields
            ->addText('title')
            ->addRepeater('items')
            ->addImage('image')
            ->endRepeater();

        return $fields->build();
    }
}
