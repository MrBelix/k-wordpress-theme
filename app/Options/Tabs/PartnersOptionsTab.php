<?php

namespace App\Options\Tabs;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;
use function Sodium\add;

class PartnersOptionsTab extends Partial
{

    public function fields()
    {
        $builder = new FieldsBuilder('partners-options-tab');

        $builder
            ->addTab('Partners modal')
            ->addGroup('partners ua')
                ->addText('title')
                ->addWysiwyg('leftContent')
                ->addWysiwyg('rightContent')
                ->addText('phone')
                ->addText('person')
                ->addText('department')
            ->endGroup()
            ->addGroup('partners ru')
                ->addText('title')
                ->addWysiwyg('leftContent')
                ->addWysiwyg('rightContent')
                ->addText('phone')
                ->addText('person')
                ->addText('department')
            ->endGroup();

        return $builder;
    }
}
