<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class HeroBlock extends Block
{
    public $name = "Hero Block";

    public function with()
    {
        $fields = get_fields();

        return [
            'title' => $fields['title']??null,
            'background' => $fields['background']??null,
            'mobileBackground' => $fields['mobile-background']??null,
        ];
    }

    public function fields()
    {
        $builder = new FieldsBuilder('hero-block');

        $builder
            ->addFile('background')
            ->addFile('mobile-background')
            ->addText('title');

        return $builder->build();
    }
}
