<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class VideoSliderBlock extends Block
{
    public $name = "Home Video Slider Block";

    public function with()
    {
        $fields = get_fields();

        return [
            'link' => $fields['link']??null,
            'videos' => array_map(function ($item){
                return [
                    'title' => $item['title'],
                    'iframe' => $item['iframe'],
                ];
            }, $fields['videos'])
        ];
    }

    public function fields()
    {
        $fields = new FieldsBuilder('home-video-slider-block');

        $fields->addLink('link')
            ->addRepeater('videos')
                ->addText('title')
                ->addText('iframe')
            ->endRepeater();

        return $fields->build();
    }
}
