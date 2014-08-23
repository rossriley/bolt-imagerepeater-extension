<?php

namespace Bolt\Extensions\Imagerepeater;

class Extension extends \Bolt\BaseExtension
{
  

    public function initialize() {

        if ($this->app['config']->getWhichEnd()=='backend') {
            $this->app['twig.loader.filesystem']->prependPath(__DIR__."/twig");
        }
        $this->addCss('assets/styling.css');
    }

    public function getName()
    {
        return "image-repeater";
    }

}






