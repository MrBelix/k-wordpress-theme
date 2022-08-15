<?php

namespace App\Blocks;

use App\Models\Event;
use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class MainEventBlock extends Block
{
    public $name = 'Main Event Block';

    public function with()
    {
        $event = get_field('event');

        return [
            'year' => get_field('year'),
            'event' => $event?new Event($event) : null,
        ];
    }

    public function fields()
    {
        $builder = new FieldsBuilder('main-event-block');

        $builder
            ->addText('year')
                ->addPostObject('event', [
                    'post_type' => 'event'
                ]);

        return $builder->build();
    }
}
