<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SocialLinksBlock extends Block
{
    public $name = "Social Links Block";

    public function with()
    {
        $fields = get_fields();

        return [
            'items' => $fields['items']??[]
        ];
    }

    public function fields()
    {
        $fields = new FieldsBuilder('social-links-block');

        $fields->addRepeater('items')
            ->addSelect('service', [
                'choices' => [
                    'instagram' => 'Instagram',
                    'telegram' => 'Telegram',
                    'facebook' => 'Facebook',
                    'youtube' => 'YouTube'
                ]
            ])
            ->addText('link')
            ->endRepeater();

        return $fields->build();
    }
}
