<?php
namespace Uphp\ActionView\Template\Traits\ChainTemplate;

use Uphp\web\Application as App;

trait Header{

    public function header(Array $options=[]){
        $header = "<header>" . self::$sufixLine;
        $header .= "<div class=\"headerwrapper\">" . self::$sufixLine;
        return $header;
    }

    public function endHeader()
    {
        $header = self::endDiv() . self::$sufixLine;
        $header .= "</header>" . self::$sufixLine;
        return $header;
    }

    public function headerLeft()
    {
        $left = "<div class=\"header-left\">" . self::$sufixLine;
        return $left;
    }

    public function endHeaderLeft()
    {
        return self::endDiv();
    }

    public function headerRight()
    {
        $right = "<div class=\"header-right\">" . self::$sufixLine;
        return $right;
    }

    public function endHeaderRight()
    {
        $endRight = self::endDiv();
        return $endRight;
    }

    public function headerPullRight()
    {
        $pullRight = "<div class=\"pull-right\">" . self::$sufixLine;
        return $pullRight;
    }

    public function endHeaderPullRight()
    {
        return self::endDiv() . self::$sufixLine;
    }

    public function headerLogo(Array $options=[])
    {
        $logo = "<a href=\"/\" class=\"logo\">" . self::$sufixLine;
        $logo .= "<img src=\"" . self::$templateLanguage->logo_src() . "\" alt=\"\" />" . self::$sufixLine;
        $logo .= "</a>" . self::$sufixLine;

        return $logo;
    }

    public function menuCollapse()
    {
        $collapse = "<a href=\"\" class=\"menu-collapse\">" . self::$sufixLine;
        $collapse .= "<i class=\"fa fa-bars\"></i>" . self::$sufixLine;
        $collapse .= "</a>" . self::$sufixLine;
        return $collapse;
    }

    public function headerOptionsButton()
    {
        $button = "<div class=\"btn-group btn-group-option\">" . self::$sufixLine;
        $button .= "<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">" . self::$sufixLine;
        $button .= self::$templateLanguage->header_options_label() . " <i class=\"fa fa-caret-down\"></i>" . self::$sufixLine;
        $button .= "</button>" . self::$sufixLine;
        return $button;
    }

    public function endHeaderOptionsButton()
    {
        return self::endDiv();
    }

    public function headerOptionsMenu()
    {
        $menu = "<ul class=\"dropdown-menu pull-right\" role=\"menu\">" . self::$sufixLine;
        return $menu;
    }

    public function endHeaderOptionsMenu()
    {
        return "</ul>" . self::$sufixLine;
    }

    public function headerOptionsItems(){
        $optionItem = "";
        foreach (self::$templateLanguage->header_options_items() as $label => $arr) {
            if ($arr == "DIVIDER") {
                $optionItem .= $this->headerOptionsItemDivider();
            } else {
                $optionItem .= "<li><a href=\"" . $arr["url"] . "\"><i class=\"" . $arr["class"] . "\"></i> " . $label . "</a></li>" . self::$sufixLine;
            }
        }
        return $optionItem;
    }

    public function headerOptionsItemDivider(){
        $divider = "<li class=\"divider\"></li>" . self::$sufixLine;
        return $divider;
    }

}