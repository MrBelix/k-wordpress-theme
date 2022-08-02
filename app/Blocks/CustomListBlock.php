<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class CustomListBlock extends Block
{

    public $name = 'Custom List Block';

    public function with()
    {
        $fields = get_fields();

        return [
            'items' => $fields['items']??[],
        ];
    }

    public function fields()
    {
        $fields = new FieldsBuilder('custom-list-block');

        $fields->addRepeater('items')
            ->addText('text')
            ->endRepeater();

        return $fields->build();
    }
}
