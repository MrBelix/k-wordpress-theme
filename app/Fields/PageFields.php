<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PageFields extends Field
{

    public function fields()
    {
        $fields = new FieldsBuilder('Page');

        $fields->setLocation('post_type', '==', 'page');

        $fields->addFile('background')
            ->addFile('background_mobile');

        return $fields->build();
    }
}
