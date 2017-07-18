<?php
namespace Uphp\ActionView\Template\Traits\ChainTemplate;

use UPhp\Languages\Label;

trait Components{
    public function btnList()
    {
        $list = "<div class=\"btn-list\">";
        return $list;
    }
    public function endBtnList()
    {
        return self::endDiv();
    }
    public function button($htmlID)
    {
        $language = self::$componentLanguage["button"][$htmlID];
        $button = "<button class=\"btn btn-" . $language["type"] . " btn-" . $language["design"] . "\" id=\"" . $htmlID . "\"><i class=\"" . $language["icon"] . "\"></i> " . $language["label"] . "</button>";
        return $button;
    }

}