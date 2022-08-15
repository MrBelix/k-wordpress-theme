<?php

namespace App\Fields;

use App\Blocks\ProjectSliderBlock;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ProjectFields extends Field
{
    public function fields()
    {
        $builder = new FieldsBuilder('Project');

        $builder->setLocation('post_type', '==', 'project');

        $builder
            ->addSelect('district', [
                'choices' => config('districts'),
            ])
            ->addGallery('images');

        foreach (config('project.info') as $key => $value) {
            $params = [
                'label' => pll__($value['label'])
            ];

            switch ($value['type']) {
                case 'bool':
                    $builder->addTrueFalse($key, $params);
                    break;
                default:
                    $builder->addText($key, $params);
            }
        }

        $builder->addGroup('slider')
            ->addFields($this->get(ProjectSliderBlock::fieldsBuilder()))
            ->endGroup();

        return $builder->build();
    }
}
