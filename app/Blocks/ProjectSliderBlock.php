<?php

namespace App\Blocks;

use App\Mappers\ProjectSliderMapper;
use App\Models\Project;
use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ProjectSliderBlock extends Block
{
    public $name = 'Projects Slider Block';

    public function with()
    {
        $fields = get_fields();

        return [
            'title' => $fields['title']??null,
            'link' => $fields['link']??null,
            'whiteButtonLink' => $fields['white_button_link']??null,
            'projects' => array_map(
                [ProjectSliderMapper::class, 'mapStatic'],
                array_column($fields['projects'], 'project')??[]
            )
        ];
    }

    public static function fieldsBuilder()
    {
        $fields = new FieldsBuilder('project-slider-block');

        $fields->addText('title')
            ->addLink('link')
            ->addLink('white_button_link')
            ->addRepeater('projects')
            ->addPostObject('project', [
                'post_type' => 'project'
            ])
            ->endRepeater();

        return $fields;
    }

    public function fields()
    {
        return self::fieldsBuilder()->build();
    }
}
