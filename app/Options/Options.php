<?php

namespace App\Options;

use App\Options\Tabs\MainOptionsTab;
use App\Options\Tabs\PartnersOptionsTab;
use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Options extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Options';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Options | Options';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $options = new FieldsBuilder('options');

        $options
            ->addFields($this->get(MainOptionsTab::class))
            ->addFields($this->get(PartnersOptionsTab::class));

        return $options->build();
    }
}
