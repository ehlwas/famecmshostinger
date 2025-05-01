<?php namespace Acme\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \Acme\Contact\Components\ContactForm::class => 'contactForm'
        ];
    }
}
