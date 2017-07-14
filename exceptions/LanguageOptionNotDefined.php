<?php
namespace UPhp\ActionView\Templates\Exception;

use \src\UphpException;

class LanguageOptionNotDefined extends UphpException
{
    public function __construct($name){
        parent::__construct("Option <strong>" . $name . "</strong> not defined in languages/templates/ChainTemplate.php", __CLASS__);
    }
}