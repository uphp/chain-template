<?php
namespace Uphp\ActionView\Template\Traits\ChainTemplate;

use src\Inflection;
use Uphp\web\Application as App;

trait Section{
    public function section(){
        $section = "<section>";
        $section .= "<div class=\"mainwrapper\">";
        return $section;
    }

    public function endSection(){
        $section = self::endDiv();
        $section .= "</section>";
        return $section;
    }

    public function sectionLeftPanel(){
        $left = "<div class=\"leftpanel\">";
        return $left;
    }

    public function endSectionLeftPanel(){
        return self::endDiv();
    }

    public function profile(){
        $profile = "<div class=\"media profile-left\">";
        $profile .= "<div class=\"media profile-left\">";
        $profile .= "<a class=\"pull-left profile-thumb\" href=\"" . App::$templateConfig["profile_url"] . "\">";
        $profile .= "<img class=\"img-circle\" src=\"" . App::$templateConfig["profile_photo"] . "\" alt=\"\">";
        $profile .= "</a>";
        $profile .= "<div class=\"media-body\">";
        $profile .= "<h4 class=\"media-heading\">" . App::$templateConfig["profile_name"] . "</h4>";
        $profile .= "<small class=\"text-muted\">" . App::$templateConfig["profile_office"] . "</small>";
        $profile .= self::endDiv();
        $profile .= self::endDiv();

        return $profile;
    }

    public function menu(){
        $menu = "<h5 class=\"leftpanel-title\">" . App::$templateConfig["menu_title"] . "</h5>";
        $menu .= "<ul class=\"nav nav-pills nav-stacked\">";
        foreach (App::$templateConfig["menu_items"] as $label => $item) {
            $menu .= "<li><a href=\"" . $item["url"] . "\"><i class=\"" . $item["class"] . "\"></i><span>" . $label . "</span></a></li>";
        }
        $menu .= "</ul>";
        return $menu;
    }

    public function sectionMainPanel()
    {
        $main = "<div class=\"mainpanel\">";
        return $main;
    }

    public function endSectionMainPanel(){
        $main = self::endDiv();
    }

    public function sectionPageHeader()
    {
        $pageHeader = "<div class=\"pageheader\">";
        $pageHeader .= "<div class=\"media\">";
        $pageHeader .= "<div class=\"pageicon pull-left\">";
        $pageHeader .= "<i class=\"fa fa-building\"></i>";
        $pageHeader .= self::endDiv();
    }

    public function endSectionPageHeader()
    {
        $pageHeader = self::endDiv();
        $pageHeader .= self::endDiv();
        return $pageHeader;
    }

    public function sectionMediaBody()
    {
        $media = "<div class=\"media-body\">";
        return $media;
    }

    public function endSectionMediaBody()
    {
        $media = self::endDiv();
        return $media;
    }

    public function breadcrumb($viewObject)
    {
        $bread = "<ul class=\"breadcrumb\">";
        $bread .= "<li><a href=\"/\"><i class=\"glyphicon glyphicon-home\"></i></a></li>";
        $bread .= "<li>" . Inflection::classify($viewObject->controllerName) . "</li>";
        $bread .= "</ul>";
        $bread .= "<h4>" . Inflection::classify($viewObject->controllerName) . "</h4>";
    }

    public function contentPanel(){
        $content = "<div class=\"contentpanel\">";
        return $content;
    }

    public function endContentPanel(){
        return self::endDiv();
    }

}

?>