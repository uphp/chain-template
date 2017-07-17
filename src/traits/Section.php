<?php
namespace Uphp\ActionView\Template\Traits\ChainTemplate;

use src\Inflection;
use Uphp\web\Application as App;

trait Section{
    public function section(){
        $section = "<section>" . self::$sufixLine;
        $section .= "<div class=\"mainwrapper\">" . self::$sufixLine;
        return $section;
    }

    public function endSection(){
        $section = self::endDiv() . self::$sufixLine;
        $section .= "</section>" . self::$sufixLine;
        return $section;
    }

    public function sectionLeftPanel(){
        $left = "<div class=\"leftpanel\">" . self::$sufixLine;
        return $left;
    }

    public function endSectionLeftPanel(){
        return self::endDiv() . self::$sufixLine;
    }

    public function profile(){
        $profile = "<div class=\"media profile-left\">" . self::$sufixLine;
        $profile .= "<a class=\"pull-left profile-thumb\" href=\"" . self::$templateLanguage["profile_url"] . "\">" . self::$sufixLine;
        $profile .= "<img class=\"img-circle\" src=\"" . self::$templateLanguage["profile_photo"] . "\" alt=\"\">" . self::$sufixLine;
        $profile .= "</a>" . self::$sufixLine;
        $profile .= "<div class=\"media-body\">" . self::$sufixLine;
        $profile .= "<h4 class=\"media-heading\">" . self::$templateLanguage["profile_name"] . "</h4>" . self::$sufixLine;
        $profile .= "<small class=\"text-muted\">" . self::$templateLanguage["profile_office"] . "</small>" . self::$sufixLine;
        $profile .= self::endDiv();
        $profile .= self::endDiv();

        return $profile;
    }

    public function menu(){
        $menu = "<h5 class=\"leftpanel-title\">" . self::$templateLanguage["menu_title"] . "</h5>" . self::$sufixLine;
        $menu .= "<ul class=\"nav nav-pills nav-stacked\">" . self::$sufixLine;
        foreach (self::$templateLanguage["menu_items"] as $label => $item) {
            $menu .= "<li><a href=\"" . $item["url"] . "\"><i class=\"" . $item["class"] . "\"></i><span>" . $label . "</span></a></li>" . self::$sufixLine;
        }
        $menu .= "</ul>" . self::$sufixLine;
        return $menu;
    }

    public function sectionMainPanel()
    {
        $main = "<div class=\"mainpanel\">" . self::$sufixLine;
        return $main;
    }

    public function endSectionMainPanel(){
        $main = self::endDiv() . self::$sufixLine;
        return $main;
    }

    public function sectionPageHeader()
    {
        $pageHeader = "<div class=\"pageheader\">" . self::$sufixLine;
        $pageHeader .= "<div class=\"media\">" . self::$sufixLine;
        $pageHeader .= "<div class=\"pageicon pull-left\">" . self::$sufixLine;
        $pageHeader .= "<i class=\"fa fa-building\"></i>" . self::$sufixLine;
        $pageHeader .= self::endDiv() . self::$sufixLine;
        return $pageHeader;
    }

    public function endSectionPageHeader()
    {
        $pageHeader = self::endDiv() . self::$sufixLine;
        $pageHeader .= self::endDiv() . self::$sufixLine;
        return $pageHeader;
    }

    public function sectionMediaBody()
    {
        $media = "<div class=\"media-body\">" . self::$sufixLine;
        return $media;
    }

    public function endSectionMediaBody()
    {
        $media = self::endDiv() . self::$sufixLine;
        return $media;
    }

    public function breadcrumb($viewObject)
    {
        $bread = "<ul class=\"breadcrumb\">" . self::$sufixLine;
        $bread .= "<li><a href=\"/\"><i class=\"glyphicon glyphicon-home\"></i></a></li>" . self::$sufixLine;
        $bread .= "<li>" . Inflection::classify($viewObject->controllerName) . "</li>" . self::$sufixLine;
        $bread .= "</ul>" . self::$sufixLine;
        $bread .= "<h4>" . Inflection::classify($viewObject->controllerName) . "</h4>" . self::$sufixLine;
        return $bread;
    }

    public function contentPanel(){
        $content = "<div class=\"contentpanel\">" . self::$sufixLine;
        return $content;
    }

    public function endContentPanel(){
        return self::endDiv() . self::$sufixLine;
    }

}

?>