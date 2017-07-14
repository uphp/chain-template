<?php
namespace UPhp\Languages;

use UPhp\ActionView\Templates\ChainTemplate\TemplateViewResult;

class Label extends LanguageDefine {

    private static $templateLanguage;

    public static function layoutDefine(string $lang, Array $arr_language)
    {
        self::$templateLanguage["ChainTemplate"][$lang] = $arr_language;
    }

    public static function getLayoutLanguage(string $lang)
    {
        return new TemplateViewResult(self::$templateLanguage["ChainTemplate"][$lang]);
    }

}