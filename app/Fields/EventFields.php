<?php

namespace App\Fields;

use App\Blocks\ProjectSliderBlock;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class EventFields extends Field
{
    public function fields()
    {
        $builder = new FieldsBuilder('Event');

        $builder->setLocation('post_type', '==', 'event');

        $builder->addText('date')
            ->addText('address')
            ->addText('text')
            ->addRepeater('left-list')
                ->addText('text')
            ->endRepeater()
            ->addText('right-text')
            ->addRepeater('right-list')
                ->addText('text')
            ->endRepeater()
            ->addGroup('slider')
                ->addFields($this->get(ProjectSliderBlock::fieldsBuilder()))
            ->endGroup();

        return $builder->build();
    }
}
