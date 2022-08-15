<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class VideoSliderBlock extends Block
{
    public $name = "Video Slider Block";

    public function with()
    {
        $fields = get_fields();

        return [
            'title' => $fields['title'],
            'videos' => array_map(function ($items) {
                return [
                    'title' => $items['title'],
                    'image' => $items['image'],
                    'iframe' => $items['iframe'],
                    'district' => config('districts')[$items['district']]
                ];
            }, $fields['videos']??[])
        ];
    }

    public function fields()
    {
        $fields = new FieldsBuilder('video-slider-block');

        $fields
            ->addText('title')
            ->addRepeater('videos')
                ->addText('title')
                ->addImage('image')
                ->addText('iframe')
                ->addSelect('district', [
                    'choices' => array_map(function ($item) {
                        return __($item);
                    }, config('districts'))
                ])
            ->endRepeater();

        return $fields->build();
    }
}
