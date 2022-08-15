<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class IconListBlock extends Block
{
    public $name = "Icon List Block";

    public function with()
    {
        $fields = get_fields();

        return [
            'items' => $fields['items']??[]
        ];
    }

    public function fields()
    {
        $fields = new FieldsBuilder('icon-list-block');

        $fields->addRepeater('items')
            ->addSelect('type', [
                'choices' => [
                    'mark' => 'Mark',
                    'envelope' => 'Envelope',
                    'phone' => 'Phone'
                ]
            ])
            ->addText('text');

        return $fields->build();
    }
}
