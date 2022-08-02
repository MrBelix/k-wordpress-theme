<?php

namespace App\Fields;

use App\Blocks\ProjectSliderBlock;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class LicensesFields extends Field
{
    public function fields()
    {
        $fields = new FieldsBuilder('Licenses');

        $fields->setLocation('page_template', '==', 'template-licenses.blade.php');

        $fields->addGroup('slider')
                ->addFields($this->get(ProjectSliderBlock::fieldsBuilder()))
            ->endGroup();

        return $fields->build();
    }
}
