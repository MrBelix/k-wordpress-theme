<?php

namespace App\Options\Tabs;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SellOptionsTab extends Partial
{

    public function fields()
    {
        $builder = new FieldsBuilder('sell-options-tab');

        $builder
            ->addTab('Sell modal')
            ->addGroup('sell ua')
                ->addText('title')
                ->addWysiwyg('leftContent')
                ->addWysiwyg('rightContent')
                ->addText('phone')
                ->addText('person')
                ->addText('department')
            ->endGroup()
            ->addGroup('sell ru')
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
