<?php
/**
 * This file is part of the drobotik/http-status.
 * @author    Aleksandr Drobotik <drobotiksbox@gmail.com>
 * @copyright 2023 Aleksandr Drobotik
 * @license   https://opensource.org/license/mit  The MIT License
 */
declare(strict_types=1);

namespace Drobotik\HttpStatus;

use Exception;

class HttpStatusException extends Exception
{
    public const UNSUPPORTED_STATUS = 'unsupported status';

    /**
     * @throws HttpStatusException
     */
    public static function unsupportedStatus()
    {
        throw new static(self::UNSUPPORTED_STATUS);
    }
}