<?php
namespace UPhp\ActionView\Templates\ChainTemplate;

use UPhp\ActionView\Templates\Exception\LanguageOptionNotDefined;

class TemplateViewResult{

    private $arrTemplateLanguage;

    public function __construct($labelLanguageObject){
        $this->arrTemplateLanguage = $labelLanguageObject;
    }

    public function __call($name, $arguments)
    {
        $templateLabel = $this->arrTemplateLanguage;
        if (array_key_exists($name, $templateLabel)) {
            return $templateLabel[$name];
        } else {
            throw new LanguageOptionNotDefined($name);
        }
    }

}