<?php

namespace App\Options\Tabs;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class MainOptionsTab extends Partial
{

    public function fields()
    {
        $builder = new FieldsBuilder('main-options-tab');

        $builder
            ->addTab('Main')
            ->addText('Phone')
            ->addFile('EventsBackground');

        return $builder;
    }
}
