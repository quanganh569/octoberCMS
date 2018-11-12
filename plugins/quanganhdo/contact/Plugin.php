<?php namespace Quanganhdo\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Quanganhdo\Contact\Components\ContactForm'=>'contactform',
        ];
    }

    public function registerSettings()
    {
    }
}
