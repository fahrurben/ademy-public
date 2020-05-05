<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 06/05/20
 * Time: 5:21
 */

namespace Domain\Exceptions;

class EntityNotFoundException extends \Exception
{
    public function __construct($message, $code = 0, Exception $previous = null) {
        //custom code
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
