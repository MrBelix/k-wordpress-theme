<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class EventsListBlock extends Block
{
    public $name = 'Events List Block';

    public function with()
    {
        $fields = get_fields();

     return   [
            'hide_desktop' => $fields['hide_desktop']??false,
            'title' => $fields['title']??null,
            'events' => $fields['events']??[]
        ];
    }

    public function fields()
    {
        $fields = new FieldsBuilder('event-list-block');

        $fields
            ->addTrueFalse('hide_desktop')
            ->addText('title')
            ->addRepeater('events')
                ->addPostObject('event', [
                    'post_type' => 'event'
                ])
            ->endRepeater();

        return $fields->build();
    }
}
