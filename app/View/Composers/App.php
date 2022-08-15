<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'navigation' => $this->navigation(),
            'phone' => $this->phone(),
            'phoneUrl' => $this->phoneUrl()
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    private function navigation()
    {
        return [
            'right' => [
                'theme_location' => 'primary_navigation_right',
                'container' => false
            ],
            'left' => [
                'theme_location' => 'primary_navigation_left',
                'container' => false
            ]
        ];
    }

    private function phone()
    {
        return get_field('phone', 'options');
    }

    private function phoneUrl()
    {
        return 'tel:' . str_replace(['(', ')', ' ', '-'], '', $this->phone());
    }
}
