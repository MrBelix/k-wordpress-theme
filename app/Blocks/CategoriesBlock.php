<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class CategoriesBlock extends Block
{
    public $name = 'Categories Block';

    public function with()
    {
        $fields = get_fields();

        return [
            'title' => $fields['title']??null,
            'items' => $fields['items']??[],
            'desktopBaseImage' => $fields['desktop_base_background']??null
        ];
    }

    public function fields()
    {
        $builder = new FieldsBuilder('categories-block');

        $builder
            ->addText('title')
            ->addImage('desktop_base_background')
            ->addRepeater('items')
                ->addText('title')
                ->addUrl('link')
                ->addImage('image')
                ->addImage('mobile_image')
                ->addTrueFalse('show_mobile')
            ->endRepeater();

        return $builder->build();
    }
}
