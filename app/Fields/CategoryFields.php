<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class CategoryFields extends Field
{

    public function fields()
    {
        $builder = new FieldsBuilder('additional-category-fields');

        $builder->setLocation('taxonomy', '==', 'project-category');

        $builder->addImage('thumbnail')
            ->addImage('link_image')
            ->addTaxonomy('categories', [
                'taxonomy' => 'project-category'
            ]);

        return $builder->build();
    }
}
