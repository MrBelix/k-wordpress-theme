<?php

namespace App\Options\Tabs;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PartnersOptionsTab extends Partial
{

    public function fields()
    {
        $builder = new FieldsBuilder('partners-options-tab');

        $builder
            ->addTab('Partners modal')
            ->addGroup('partners')
                ->addWysiwyg('content')
                ->addText('phone')
                ->addWysiwyg('additional-content')
            ->endGroup();

        return $builder;
    }
}
