<?php
namespace UPhp\ActionView\Templates\ChainTemplate;

require("traits/Header.php");
require("traits/Section.php");

use UPhp\web\Application as App;

class Layout{

    use \UPhp\ActionView\Template\Traits\ChainTemplate\Header;
    use \UPhp\ActionView\Template\Traits\ChainTemplate\Section;

    public static $sufixLine = "\n";

    public function html()
    {
        $html = "<!DOCTYPE html>" . self::$sufixLine;
        $html .= "<html lang=\"" . App::$appConfig["lang"] . "\">" . self::$sufixLine;
        //foreach ($content as $element) {
        //    $html .= $element;
        //}
        //$html .= "</html>";
        return $html;
    }

    public function endHtml()
    {
        return "</html>";
    }

    public function head($viewObject, Array $options=[])
    {
        //title => Titulo da página
        if (! isset($options["title"])) $options["title"] = App::$templateConfig["title"];
        //theme => Tema do css
        if (! isset($options["theme"])) $options["theme"] = App::$templateConfig["theme"];

        $head = "<head>" . self::$sufixLine;
        $head .= "<meta charset=\"" . App::$appConfig["charset"] . "\">" . self::$sufixLine;
        $head .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">" . self::$sufixLine;
        $head .= "<meta name=\"description\" content=\"" . App::$appConfig["description"] . "\">" . self::$sufixLine;
        $head .= "<meta name=\"author\" content=\"" . App::$appConfig["author"] . "\">" . self::$sufixLine;
        $head .= "<title>" . $options["title"] . "</title>" . self::$sufixLine;
        $head .= "<link href=\"/assets/css/style." . $options["theme"] . ".css\" rel=\"stylesheet\">" . self::$sufixLine;
        $head .= "<link href=\"/assets/uphp/uphp.css\" rel=\"stylesheet\">" . self::$sufixLine;
        $head .= file_get_contents("app/views/" . $viewObject->controllerName . "/assets/css/includeCSS.php") . self::$sufixLine;
        $head .= "<link href=\"/app/views/" . $viewObject->controllerName . "/assets/css/" . $viewObject->actionName . ".css\" rel=\"stylesheet\">" . self::$sufixLine;
        $head .= "<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->" . self::$sufixLine;
        $head .= "<!--[if lt IE 9]>" . self::$sufixLine;
        $head .= "<script src=\"/assets/js/html5shiv.js\"></script>" . self::$sufixLine;
        $head .= "<script src=\"/assets/js/respond.min.js\"></script>" . self::$sufixLine;
        $head .= "<![endif]-->" . self::$sufixLine;
        $head .= "</head>" . self::$sufixLine;
        return $head;
    }

    public function body(){
        $body = "<body>" . self::$sufixLine;
        return $body;
    }

    public function endBody()
    {
        return "</body>";
    }

    public function javascripts($viewObject)
    {
        $js = "<script src=\"/assets/js/jquery-1.11.1.min.js\"></script>";
        $js .= "<script src=\"/assets/js/jquery-migrate-1.2.1.min.js\"></script>";
        $js .= "<script src=\"/assets/js/bootstrap.min.js\"></script>";
        $js .= "<script src=\"/assets/js/modernizr.min.js\"></script>";
        $js .= "<script src=\"/assets/js/pace.min.js\"></script>";
        $js .= "<script src=\"/assets/js/retina.min.js\"></script>";
        $js .= "<script src=\"/assets/js/jquery.cookies.js\"></script>";
        $js .= "<script src=\"/assets/js/custom.js\"></script>";
        $js .= "<script src=\"/assets/uphp/uphp.js\"></script>";
        $js .= file_get_contents("app/views/" . $viewObject->controllerName . "/assets/js/includeJS.php");
        $js .= "<script src=\"/app/views/" . $viewObject->controllerName . "/assets/js/" . $viewObject->actionName . ".js\"></script>";

        return $js;
    }

    //Private functions
    private static function endDiv()
    {
        return "</div>" . self::$sufixLine;
    }

}