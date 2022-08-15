<?php

namespace App\View\Composers;


use Roots\Acorn\View\Composer;

class SellModalComposer extends Composer
{
    protected static $views = [
        'components.sell-modal'
    ];

    public function with()
    {
        $fields = $this->getFields();
        return [
            'sellModal' => array_merge($fields, ['phoneLink' => $this->phoneUrl($fields['phone']??'')])
        ];
    }

    private function phoneUrl($phone)
    {
        return 'tel:' . str_replace(['(', ')', ' ', '-'], '', $phone);
    }

    private function getFields()
    {
        $slug = pll_current_language('slug');

        switch ($slug) {
            case 'ru':
                return get_field('sell ru', 'options');
            case 'uk':
            default:
                return  get_field('sell ua', 'options');
        }
    }
}
