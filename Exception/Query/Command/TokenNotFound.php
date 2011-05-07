<?php

/**
 * TokenNotFound exceptionclass gets raised when you try to replace a token, in
 * a command, which isn't part of the command schema.
 *
 * For example, when you add a LIMIT clause on a DELETE.
 *
 * @package    Orient
 * @subpackage Exception
 * @author     Alessandro Nadalin <alessandro.nadalin@gmail.com>
 */

namespace Orient\Exception\Query\Command;

use \Orient\Exception;

class TokenNotFound extends Exception
{
  const MESSAGE = 
<<<EOF
  The token %s is not contained in the %s command schema
  The command schema is: %s
EOF;

  public function __construct($token, $commandClass)
  {
    $schema = $commandClass::SCHEMA;

    $this->message = sprintf(self::MESSAGE, $token, $commandClass, $schema);
  }
}

