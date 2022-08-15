<?php

namespace App\View\Composers;


use Roots\Acorn\View\Composer;

class PartnersModalComposer extends Composer
{
    protected static $views = [
        'components.partners-modal'
    ];

    public function with()
    {
        $fields = $this->getFields();
        return [
            'partnerModal' => array_merge($fields, ['phoneLink' => $this->phoneUrl($fields['phone']??'')])
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
                return get_field('partners ru', 'options');
            case 'uk':
            default:
                return  get_field('partners ua', 'options');
        }
    }
}
